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
    
    public function sendEmail($to = 'azizben962@gmail.com' , $content = 'See Twig integration for better HTML integration!' ): void
    {
        
        $email = (new Email())
            ->from('azizben962@gmail.com')
            ->to($to)
            ->subject('bonjour')
            ->html($content);
            
             
            $this->mailer->send($email);
      
        // ...
    }
}
?>

