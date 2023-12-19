<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgricoleController extends AbstractController
{
    #[Route('/agricole', name: 'app_agricole')]
    public function index(): Response
    {
        return $this->render('agricole/index.html.twig', [
            'controller_name' => 'AgricoleController',
        ]);
    }
}
