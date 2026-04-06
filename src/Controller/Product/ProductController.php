<?php

namespace App\Controller\Product;
    use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use App\Repository\Product\ProductRepository;
use App\Entity\Product\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/Product/List', name: 'product_list')]
    public function product_list(Request $request, ProductRepository $repo): Response
    {
        $search   = $request->query->get('search', '');
        $category = $request->query->get('category', '');
        $sort     = $request->query->get('sort', '');

        $products = $repo->findFiltered($search, $category, $sort);

        return $this->render('html/Product/ProductList.html.twig', [
            'products' => $products,
        ]);
    }


    #[Route('/deleteProduct/{id}', name: 'product_delete', methods: ['POST'])]
    public function delete($id, ProductRepository $repository, EntityManagerInterface $em): Response
    {
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

            $errors = [];

            // ✅ Validation
            if (!$category) {
                $errors[] = 'La catégorie est obligatoire';
            }

            if (!is_numeric($price) || $price < 0) {
                $errors[] = 'Le prix doit être un nombre positif';
            }

            if (strlen($description) < 4 ) {
                $errors[] = 'La description doit contenir au moins 4 caractères';
            }

            
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

        return $this->render('html/Product/ProductEdit.html.twig', [
            'product' => $product,
        ]);
    }



    #[Route('/CreateProduct', name: 'CreateProduct', methods: ['GET','POST'])]
    public function CreateProduct(
        Request $request,
        EntityManagerInterface $em,
        CsrfTokenManagerInterface $csrfTokenManager
    ): Response {

        if ($request->isMethod('POST')) {
            $submittedToken = $request->request->get('_token');

            // ✅ CSRF check
            if (!$csrfTokenManager->isTokenValid(new CsrfToken('CreateProduct', $submittedToken))) {
                $this->addFlash('error', 'Requête invalide (CSRF)');
                return $this->redirectToRoute('CreateProduct');
            }

            // Get form data
            $category    = $request->request->get('category');
            $price       = $request->request->get('price');
            $description = trim($request->request->get('description'));

            $errors = [];

            // ✅ Validation
            if (!$category) {
                $errors[] = 'La catégorie est obligatoire';
            }

            if (!is_numeric($price) || $price < 0) {
                $errors[] = 'Le prix doit être un nombre positif';
            }

            if (strlen($description) < 4 ) {
                $errors[] = 'La description doit contenir au moins 4 caractères';
            }

            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }

                // Return to the form if there are errors
                return $this->render('html/Product/ProductCreate.html.twig', [
                    'category'    => $category,
                    'price'       => $price,
                    'description' => $description,
                    'csrf_token'  => $csrfTokenManager->getToken('CreateProduct')->getValue()
                ]);
            }

            // ✅ Create and persist the product
            $product = new Product();
            $product->setCategory($category);
            $product->setPrice((float)$price);
            $product->setDescription($description);
            $product->setCreatedAt(new \DateTime()); // camelCase

            $em->persist($product);
            $em->flush();

            $this->addFlash('success', 'Produit créé avec succès');
            return $this->redirectToRoute('product_list');
        }

        // GET request: render empty form
        return $this->render('html/Product/ProductCreate.html.twig', [
            'csrf_token' => $csrfTokenManager->getToken('CreateProduct')->getValue()
        ]);
    }
    
}

