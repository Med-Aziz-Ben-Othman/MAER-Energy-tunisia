<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResController extends AbstractController
{
    #[Route('/res', name: 'app_res')]
    public function index(): Response
    {
        return $this->render('res/index.html.twig', [
            'controller_name' => 'ResController',
        ]);
    }
}
