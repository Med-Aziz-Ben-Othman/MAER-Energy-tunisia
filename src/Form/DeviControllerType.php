<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\User;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class DeviControllerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Nom', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'champs vide',
                ]),
            ],
        ])
        ->add('Prenom', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'champs vide',
                ]),
            ],
        ])
        ->add('Telephone' ,TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'champs vide',
                ]),
                new Regex([
                    'pattern' => '/^\d{8}$/',
                    'message' => 'Le numéro de téléphone doit contenir 8 chiffres.',
                ]),
                
            ],
        ])
        ->add('Email', EmailType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'champs vide',
                ]),
                new Email([
                    'message' => 'L\'adresse email "{{ value }}" n\'est pas valide.',
                ]),
            ],
        ])
        ->add('RefernceSTEG',TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'champs vide',
                ]),
                new Regex([
                    'pattern' => '/^\d{9}$/',
                    'message' => 'La Réference doit contenir 9 chiffre',
                ]),
                
            ],
        ])
        ->add('Remarque' ,TextareaType::class
        )         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
