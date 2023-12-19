<?php

namespace App\Controller;

use App\Form\DeviControllerType;
use App\Service\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;




class DeviController extends AbstractController
{
    #[Route('/devi', name: 'app_devi', methods: ['GET', 'POST'])]
    public function yourAction(Request $request,MailerService $mailer)
    {
        $form = $this->createForm(DeviControllerType::class);
        
        $form->handleRequest($request);   

        $mailer ->sendEmail(content: 'hi im aziz');
    
        return $this->render('devi/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
}
