<?php

namespace App\Controller\Product;

use App\Entity\Product\ProductSubscription;
use App\Repository\Product\ProductSubscriptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


final class SubscriptionController extends AbstractController
{
    #[Route('/subscriptionslist', name: 'subscription_list', methods: ['GET'])]
    public function list(
        Request $request,
        ProductSubscriptionRepository $subscriptionRepo
    ): Response {
        // Get filter values from query string
        $typeFilter   = $request->query->get('type', 'Tous');
        $statusFilter = $request->query->get('status', 'Tous');
        $search       = trim($request->query->get('search', ''));

        // Start query builder
        $qb = $subscriptionRepo->createQueryBuilder('s')
            ->join('s.clientUser', 'c')
            ->join('s.productObj', 'p');

        if ($typeFilter !== 'Tous') {
            $qb->andWhere('s.type = :type')
            ->setParameter('type', $typeFilter);
        }

        if ($statusFilter !== 'Tous') {
            $qb->andWhere('s.status = :status')
            ->setParameter('status', $statusFilter);
        }

        if ($search !== '') {
            $qb->andWhere('p.category LIKE :search OR c.nom LIKE :search')
            ->setParameter('search', '%'.$search.'%');
        }

        // Execute query
        $subscriptions = $qb->getQuery()->getResult();

        // Transform for Twig: replace client id with lastName, product id with category
        $subscriptionsView = array_map(function(ProductSubscription $s) {
            return [
                'subscriptionId'   => $s->getSubscriptionId(),
                'clientLastName'   => $s->getClientUser()->getNom(),
                'productCategory'  => $s->getProductObj()->getCategory(),
                'type'             => $s->getType(),
                'subscriptionDate' => $s->getSubscriptionDate(),
                'expirationDate'   => $s->getExpirationDate(),
                'status'           => $s->getStatus(),
            ];
        }, $subscriptions);

        // Count stats
        $total    = count($subscriptions);
        $active   = count(array_filter($subscriptions, fn($s) => $s->getStatus() === 'ACTIVE'));
        $draft    = count(array_filter($subscriptions, fn($s) => $s->getStatus() === 'DRAFT'));
        $suspended= count(array_filter($subscriptions, fn($s) => $s->getStatus() === 'SUSPENDED'));
        $closed   = count(array_filter($subscriptions, fn($s) => $s->getStatus() === 'CLOSED'));
        $expiringSoon = count(array_filter($subscriptions, fn($s) => $s->getExpirationDate() <= new \DateTime('+30 days')));

        return $this->render('html/Product/SubscriptionList.html.twig', [
            'subscriptions' => $subscriptionsView,
            'totalSubscriptions'         => $total,
            'activeSubscriptions'        => $active,
            'draftSubscriptions'         => $draft,
            'suspendedSubscriptions'     => $suspended,
            'closedSubscriptions'        => $closed,
            'expiringSoon'               => $expiringSoon,
            'typeFilter'                 => $typeFilter,
            'statusFilter'               => $statusFilter,
            'search'                     => $search,
        ]);
    }



    #[Route('/subscriptiondelete/{id}', name: 'subscriptiondelete', methods: ['POST'])]
    public function subscriptiondelete($id, ProductSubscriptionRepository $repository, EntityManagerInterface $em): Response
    {
        $subproduct = $repository->find($id);

        if (!$subproduct) {
            throw $this->createNotFoundException('Product not found');
        }

        $em->remove($subproduct);
        $em->flush();
        $this->addFlash('success', 'Subscription Produit supprimé avec succès');
        return $this->redirectToRoute('subscription_list');
    }
}
