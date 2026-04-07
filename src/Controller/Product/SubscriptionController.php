<?php

namespace App\Controller\Product;

use App\Entity\Product\ProductSubscription;

use App\Repository\Product\ProductRepository;
use App\Repository\Product\ProductSubscriptionRepository;
use App\Repository\User\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


final class SubscriptionController extends AbstractController
{
    #[Route('/subscriptionslist', name: 'subscription_list', methods: ['GET','POST'])]
    public function list(
        Request $request,
        ProductSubscriptionRepository $subscriptionRepo
    ): Response {

        $typeFilter   = $request->query->get('type', '');
        $statusFilter = $request->query->get('status', '');
        $search       = trim($request->query->get('search', ''));

        $qb = $subscriptionRepo->createQueryBuilder('s')
            ->join('s.clientUser', 'c')
            ->join('s.productObj', 'p');

        // Apply filters
        if ($typeFilter !== '') {
            $qb->andWhere('s.type = :type')
                ->setParameter('type', $typeFilter);
        }

        if ($statusFilter !== '') {
            $qb->andWhere('s.status = :status')
                ->setParameter('status', $statusFilter);
        }

        if ($search !== '') {
            $qb->andWhere('p.category LIKE :search OR c.nom LIKE :search')
                ->setParameter('search', '%'.$search.'%');
        }

        $subscriptions = $qb->getQuery()->getResult();

        // Map to arrays for Twig
        $subscriptionsView = array_map(function($s) {
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

        // Stats
        $total        = count($subscriptions);
        $active       = count(array_filter($subscriptions, fn($s)=>$s->getStatus()=='ACTIVE'));
        $draft        = count(array_filter($subscriptions, fn($s)=>$s->getStatus()=='DRAFT'));
        $suspended    = count(array_filter($subscriptions, fn($s)=>$s->getStatus()=='SUSPENDED'));
        $closed       = count(array_filter($subscriptions, fn($s)=>$s->getStatus()=='CLOSED'));
        $expiringSoon = count(array_filter($subscriptions, fn($s)=>$s->getExpirationDate() <= new \DateTime('+30 days')));

        return $this->render('html/Product/Admin/SubscriptionList.html.twig', [
            'subscriptions'         => $subscriptionsView,
            'totalSubscriptions'    => $total,
            'activeSubscriptions'   => $active,
            'draftSubscriptions'    => $draft,
            'suspendedSubscriptions'=> $suspended,
            'closedSubscriptions'   => $closed,
            'expiringSoon'          => $expiringSoon,
            'typeFilter'            => $typeFilter,
            'statusFilter'          => $statusFilter,
            'search'                => $search,
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


    #[Route('/subscription/edit', name: 'subscription_update', methods: ['GET', 'POST'])]
    public function update(
        Request $request,
        ProductSubscriptionRepository $subscriptionRepo,
        UserRepository $userRepo,
        ProductRepository $productRepo,
        EntityManagerInterface $em
    ): Response {
        $id = $request->query->get('id');
        // Use JOIN to get client name and product category directly
        $subscription = $subscriptionRepo->createQueryBuilder('s')
            ->join('s.clientUser', 'c')
            ->join('s.productObj', 'p')
            ->where('s.subscriptionId = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$subscription) {
            throw $this->createNotFoundException('Abonnement introuvable');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('update' . $id, $request->request->get('_token'))) {
                throw $this->createAccessDeniedException('Token CSRF invalide');
            }

            $client = $userRepo->find($request->request->get('client'));
            $product = $productRepo->find($request->request->get('product'));

            if (!$client || !$product) {
                $this->addFlash('error', 'Client ou produit introuvable.');
                return $this->redirectToRoute('subscription_update', ['id' => $id]);
            }

            $subscription->setClientUser($client);
            $subscription->setClient($client->getId());
            $subscription->setProductObj($product);
            $subscription->setProduct($product->getProductId());
            $subscription->setType($request->request->get('type'));
            $subscription->setStatus($request->request->get('status'));
            $subscription->setSubscriptionDate(
                new \DateTime($request->request->get('subscriptionDate'))
            );
            $subscription->setExpirationDate(
                new \DateTime($request->request->get('expirationDate'))
            );

            $em->flush();
            $this->addFlash('success', 'Abonnement mis à jour avec succès.');
            return $this->redirectToRoute('subscription_list');
        }

        return $this->render('html/Product/Admin/SubscriptionEdit.html.twig', [
            'subscription' => $subscription,
            'clients'      => $userRepo->findAll(),
            'products'     => $productRepo->findAll(),
        ]);
    }
}
