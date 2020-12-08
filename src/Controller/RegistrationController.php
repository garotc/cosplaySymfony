<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditAccountUserFormType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/creer-compte", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profile/", name="account_edit", methods="GET|POST")
     */
    public function editAccount(User $user, UserRepository $repo, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $user = $repo->findOneBy(['id'=>$user]);
        $form = $this->createForm(EditAccountUserFormType::class, $user);
        $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em->persist($user);
           $em->flush();

           $this->addFlash('message','Compte modifié avec succès');

           return $this->redirectToRoute('_app_user_account');
       }

       return $this->render('home/user/compte.html.twig',['userForm'=>$form->createView()]);

    }
}
