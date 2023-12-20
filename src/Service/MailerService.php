<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    
    public function __construct( private MailerInterface $mailer)
     {
        
       
     }
    
    public function sendEmail( $content = 'See Twig integration for better HTML integration!',string $sender ): void
    {
        
        $email = (new Email())
            ->from($sender)
            ->to('mohamedaziz.benothman@esprit.tn')
            ->subject('Devi Gratuit')
            ->html($content);
            
             
            $this->mailer->send($email);
      
        // ...
    }
}
?>

