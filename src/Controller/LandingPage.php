<?php

namespace App\Controller;

use App\Repository\AuthorRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LandingPage extends AbstractController
{
    #[Route('/', name: 'app')]
    public function index(): Response
    {
        return $this->render('html/LandingPage.html.twig', [
            'controller_name' => 'LandingPage',
        ]);
    }

}