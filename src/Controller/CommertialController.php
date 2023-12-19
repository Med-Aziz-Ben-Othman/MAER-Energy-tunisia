<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommertialController extends AbstractController
{
    #[Route('/commertial', name: 'app_commertial')]
    public function index(): Response
    {
        return $this->render('commertial/index.html.twig', [
            'controller_name' => 'CommertialController',
        ]);
    }
}
