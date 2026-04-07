<?php

namespace App\Controller\Product;

use App\Repository\Product\ProductRepository;
use App\Repository\Product\ProductSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

//#[Route('/admin/dashboard', name: 'admin_dashboard_')]
//#[IsGranted('ROLE_ADMIN')]
class DashboardController extends AbstractController{
    public function __construct(
        private ProductRepository             $productRepo,
        private ProductSubscriptionRepository $subscriptionRepo,
    ) {}

    // ─── Main page ──────────────────────────────────────────────────────────────
    #[Route('/admin/dashboard', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('html/Product/Admin/Dashboard.html.twig');
    }

    // ─── JSON data endpoint (called by JS on load / refresh) ────────────────────
    #[Route('/admin/dashboard/data', name: 'data', methods: ['GET'])]
    public function data(): JsonResponse
    {
        $products = $this->productRepo->findAll();
        $subscriptions = $this->subscriptionRepo->findAll();

// Filter out invalid products/subscriptions
        $products = array_filter($products, fn($p) => $p && $p->getPrice() !== null && $p->getCategory() !== null);
        $subscriptions = array_filter($subscriptions, fn($s) => $s && $s->getProductObj() && $s->getClientUser());

// Products KPIs
        $totalProducts = count($products);
        $prices = array_map(fn($p) => $p->getPrice(), $products);
        $avgPrice = $totalProducts ? array_sum($prices)/$totalProducts : 0;
        $minPrice = $totalProducts ? min($prices) : 0;
        $maxPrice = $totalProducts ? max($prices) : 0;

// Products by category
        $productsByCategory = [];
        foreach ($products as $p) {
            $cat = $p->getCategory();
            $productsByCategory[$cat] = ($productsByCategory[$cat] ?? 0) + 1;
        }
        arsort($productsByCategory);
        $topCategory = $productsByCategory ? array_key_first($productsByCategory) : '—';
        $topCategoryCount = $productsByCategory[$topCategory] ?? 0;

// Newest product
        $newest = null;
        foreach ($products as $p) {
            if (!$newest || $p->getCreatedAt() > $newest->getCreatedAt()) {
                $newest = $p;
            }
        }
        $newestName = $newest ? $newest->getDescription() : '—';
        $newestDate = $newest ? $newest->getCreatedAt()->format('Y-m-d') : '—';

// Subscriptions KPIs
        $totalSubs = count($subscriptions);
        $activeSubs = $suspendedSubs = $closedSubs = $draftSubs = 0;
        $totalRevenue = 0.0;
        $subsByType = $subsOverTime = $revenueByCategory = [];

        foreach ($subscriptions as $s) {
            $status = strtoupper($s->getStatus() ?? '');
            switch ($status) {
                case 'ACTIVE':    $activeSubs++; $totalRevenue += $s->getProductObj()->getPrice() ?? 0; break;
                case 'SUSPENDED': $suspendedSubs++; break;
                case 'CLOSED':    $closedSubs++; break;
                default:          $draftSubs++;
            }

            $type = strtoupper($s->getType() ?? 'UNKNOWN');
            $subsByType[$type] = ($subsByType[$type] ?? 0) + 1;

            $date = $s->getSubscriptionDate();
            if ($date) {
                $monthKey = $date->format('M Y');
                $subsOverTime[$monthKey] = ($subsOverTime[$monthKey] ?? 0) + 1;
            }

            // Revenue by category
            if ($status === 'ACTIVE') {
                $cat = $s->getProductObj()->getCategory() ?? '—';
                if (!isset($revenueByCategory[$cat])) {
                    $revenueByCategory[$cat] = ['revenue'=>0, 'subs'=>0];
                }
                $revenueByCategory[$cat]['revenue'] += $s->getProductObj()->getPrice() ?? 0;
                $revenueByCategory[$cat]['subs']++;
            }
        }

// Sort subscriptions over time chronologically
        uksort($subsOverTime, fn($a,$b) => strtotime("01 $a") <=> strtotime("01 $b"));

        return $this->json([
            'totalProducts' => $totalProducts,
            'avgPrice' => round($avgPrice,2),
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'topCategory' => $topCategory,
            'topCategoryCount' => $topCategoryCount,
            'newestProduct' => $newestName,
            'newestDate' => $newestDate,
            'productsByCategory' => $productsByCategory,

            'totalSubs' => $totalSubs,
            'activeSubs' => $activeSubs,
            'suspendedSubs' => $suspendedSubs,
            'closedSubs' => $closedSubs,
            'draftSubs' => $draftSubs,
            'totalRevenue' => round($totalRevenue,2),
            'subsByType' => $subsByType,
            'subsOverTime' => $subsOverTime,
            'revenueByCategory' => $revenueByCategory,
        ]);
    }

    // ─── Send PDF report by email ────────────────────────────────────────────────
    #[Route('/send-report', name: 'send_report', methods: ['POST'])]
    public function sendEmailReport(): JsonResponse
    {
        // Inject Mailer + PDF service and implement as needed.
        // Example skeleton:
        //
        // $pdf  = $this->pdfService->generateDashboardReport();
        // $email = (new Email())
        //     ->from('noreply@bankos.tn')
        //     ->to($this->getUser()->getEmail())
        //     ->subject('BankOS – Rapport Dashboard')
        //     ->attachPart(new DataPart($pdf, 'rapport.pdf', 'application/pdf'));
        // $this->mailer->send($email);

        return $this->json(['success' => true, 'message' => 'Rapport envoyé.']);
    }
}