<?php

namespace App\Controller\Admin;

use App\Entity\Categorie\Categorie;
use App\Entity\Categorie\Item;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categoriesCount = $entityManager->getRepository(Categorie::class)->count([]);
        $itemsCount = $entityManager->getRepository(Item::class)->count([]);

        return $this->render('admin/dashboard.html.twig', [
            'categoriesCount' => $categoriesCount,
            'itemsCount' => $itemsCount,
        ]);
    }
}
