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
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            
            // Access individual form fields
            $nom = $formData['Nom'];
            $prenom = $formData['Prenom'];
            $telephone = $formData['Telephone'];
            $email = $formData['Email'];
            $steg = $formData['RefernceSTEG'];

            $remarque = $formData['Remarque'];
            // ... access other fields in a similar way
            
            // Construct email content
            $emailContent = "Nom: $nom\nPrenom: $prenom\nTelephone: $telephone\nEmail: $email\nRef-Steg: $steg\nRemarque: $remarque\n";
            // Add other form field values to the email content
            
            // Send the email
            $mailer->sendEmail(content: $emailContent, sender:$email);
            $this->addFlash('success', 'The form was successfully submitted!');
            return $this->redirectToRoute('app_devi');
        }
    
        /* $mailer ->sendEmail(content: 'hi im aziz');*/
        return $this->render('devi/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
