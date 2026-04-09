<?php

namespace App\Controller\Product;

use App\Entity\Product\Product;
use App\Repository\Product\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/Product/List', name: 'product_list')]
    public function list(Request $request, ProductRepository $repo): Response
    {
        $products = $repo->findFiltered(
            $request->query->get('search', ''),
            $request->query->get('category', ''),
            $request->query->get('sort', '')
        );

        return $this->render('html/Product/Admin/ProductList.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/deleteProduct/{id}', name: 'product_delete', methods: ['POST'])]
    public function delete($id, ProductRepository $repository, EntityManagerInterface $em): Response{
        $product = $repository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }
        $em->remove($product);
        $em->flush();
        $this->addFlash('success', 'Produit supprimé avec succès');
        return $this->redirectToRoute('product_list');
    }

    #[Route('/EditProduct', name: 'EditProduct', methods: ['GET', 'POST'])]
    public function EditProduct(
        Request $request,
        ProductRepository $repository,
        EntityManagerInterface $em): Response {
        $id = $request->query->get('id');
        $product = $repository->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        if ($request->isMethod('POST')) {

            // ✅ CSRF check
            if (!$this->isCsrfTokenValid(
                'EditProduct_'.$id,
                $request->request->get('_token')
            )) {
                $this->addFlash('error', 'Requête invalide (CSRF)');
                return $this->redirectToRoute('EditProduct', ['id' => $id]);
            }

            // Get data
            $category    = $request->request->get('category');
            $price       = $request->request->get('price');
            $description = trim($request->request->get('description'));

            $errors = $this->validateProductData($request);
            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }

                return $this->redirectToRoute('EditProduct', ['id' => $id]);
            }

            // ✅ Update entity
            $product->setCategory($category);
            $product->setPrice((float)$price);
            $product->setDescription($description);

            $em->flush();

            $this->addFlash('success', 'Produit modifié avec succès');

            return $this->redirectToRoute('product_list');
        }

        return $this->render('html/Product/Admin/ProductEdit.html.twig', [
            'product' => $product,
        ]);
    }


    #[Route('/CreateProduct', name: 'CreateProduct', methods: ['GET','POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {

            if (!$this->isCsrfTokenValid(
                'create_product',
                $request->request->get('_token')
            )) {
                $this->addFlash('error', 'CSRF invalide');
                return $this->redirectToRoute('CreateProduct');
            }

            $errors = $this->validateProductData($request);

            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }

                return $this->render('html/Product/Admin/ProductCreate.html.twig', [
                    'old' => $request->request->all()
                ]);
            }

            $product = new Product();
            $this->hydrateProduct($product, $request);
            $product->setCreatedAt(new \DateTime());

            $em->persist($product);
            $em->flush();

            $this->addFlash('success', 'Produit créé avec succès');
            return $this->redirectToRoute('product_list');
        }

        return $this->render('html/Product/Admin/ProductCreate.html.twig');
    }

    // 🔥 Reusable validation
    private function validateProductData(Request $request): array
    {
        $category = $request->request->get('category');
        $price = $request->request->get('price');
        $description = trim($request->request->get('description'));

        $errors = [];

        if (!$category) {
            $errors[] = 'La catégorie est obligatoire';
        }

        if (!is_numeric($price) || $price < 0) {
            $errors[] = 'Le prix doit être un nombre positif';
        }

        if (strlen($description) < 4) {
            $errors[] = 'La description doit contenir au moins 4 caractères';
        }

        return $errors;
    }

    // 🔥 Reusable hydration
    private function hydrateProduct(Product $product, Request $request): void
    {
        $product->setCategory($request->request->get('category'));
        $product->setPrice((float)$request->request->get('price'));
        $product->setDescription(trim($request->request->get('description')));
    }
}

