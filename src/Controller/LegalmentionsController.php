<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LegalmentionsController extends AbstractController
{
    #[Route('/legal', name: 'app_legalmentions')]
    public function index():Response
    {
        return $this->render('legalmentions/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
