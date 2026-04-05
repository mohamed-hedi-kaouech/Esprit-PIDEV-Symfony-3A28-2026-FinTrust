<?php

namespace App\Controller\Product;

use App\Entity\Product\Product;
use App\Form\ProductType;
use App\Repository\Product\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductListController extends AbstractController
{
    #[Route('/Product/List', name: 'product_list')]
    public function product_list(ProductRepository $repo): Response
    {
        $products = $repo->findAll();


        return $this->render('/html/Product/ProductList.html.twig', [
            'products' => $products,
        ]);
    }
}