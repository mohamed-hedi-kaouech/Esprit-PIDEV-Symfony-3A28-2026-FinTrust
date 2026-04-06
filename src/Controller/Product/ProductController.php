<?php

namespace App\Controller\Product;

use App\Repository\Product\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductListController extends AbstractController
{
    #[Route('/Product/List', name: 'product_list')]
    public function product_list(Request $request, ProductRepository $repo): Response
    {
        $search   = $request->query->get('search', '');
        $category = $request->query->get('category', '');
        $sort     = $request->query->get('sort', '');

        // Fetch all then filter/sort in PHP
        // (replace with a QueryBuilder method in ProductRepository for large datasets)
        $products = $repo->findAll();

        // Filter by search (description or category)
        if ($search !== '') {
            $q = mb_strtolower($search);
            $products = array_filter($products, function ($p) use ($q) {
                return str_contains(mb_strtolower($p->getDescription()), $q)
                    || str_contains(mb_strtolower($p->getCategory()), $q);
            });
        }

        // Filter by category
        if ($category !== '') {
            $products = array_filter($products, fn($p) => $p->getCategory() === $category);
        }

        // Sort
        $products = array_values($products);
        usort($products, match ($sort) {
            'price_asc'  => fn($a, $b) => $a->getPrice() <=> $b->getPrice(),
            'price_desc' => fn($a, $b) => $b->getPrice() <=> $a->getPrice(),
            'date_asc'   => fn($a, $b) => $a->getCreatedAt() <=> $b->getCreatedAt(),
            'date_desc'  => fn($a, $b) => $b->getCreatedAt() <=> $a->getCreatedAt(),
            default      => fn($a, $b) => $a->getProductId() <=> $b->getProductId(),
        });

        return $this->render('html/Product/ProductList.html.twig', [
            'products' => $products,
        ]);
    }

    
}

