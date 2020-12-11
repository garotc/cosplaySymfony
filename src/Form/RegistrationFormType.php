<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class, [
                'constraints'=> [
                    new NotBlank([
                        'message'=>'Veuillez entrer votre pseudo (il pourra être changé plus tard)'
                    ])
                ]
            ])
            ->add('nom', TextType::class, [
                'constraints'=> [
                    new NotBlank([
                        'message'=>'Veuillez entrer votre nom'
                    ])
                ]
            ])
            ->add('prenom', TextType::class, [
                'constraints'=> [
                    new NotBlank([
                        'message'=>'Veuillez entrer votre prénom'
                    ])
                ]
            ])
            ->add('telephone', TelType::class, [
                'constraints'=> [
                    new NotBlank([
                        'message'=>'Veuillez entrer un numéro de téléphone'
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                'constraints'=> [
                    new NotBlank([
                        'message'=>'Une adresse email valide est nécessaire'
                    ])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label'=>'Mot de passe',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe'
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit faire au minimum {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label'=>'Accepter les CGU',
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter les conditions générales d\'utilisations',
                    ]),
                ],
            ])
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr'=>
                ['novalidate'=>'novalidate']
        ]);
    }
}
