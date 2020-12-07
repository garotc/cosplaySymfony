<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Entity\InscriptionSolo;
use App\Repository\UserRepository;
use App\Form\EditAccountUserFormType;
use App\Form\InscriptionSoloFormType;
use App\Repository\InscriptionSoloRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("profile/mon-compte", name="_app_user_account")
     */
    public function getInfosUser(UserRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $infos = $repo->findOneByUserId($user);
        //dd($infos);
        return $this->render('home/user/compte.html.twig', compact('user', 'infos'));
    }

    /**
     * @Route("/profile/modifier-compte", name="user_edit", methods={"GET","POST"})
    */

    public function editUser(User $user=null, Request $request, EntityManagerInterface $em) : Response
    {

        $user = $this->getUser('id');
        
        $form = $this->createForm(EditAccountUserFormType::class, $user);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $em->persist($user);
            $em->flush();

            $this->addFlash ('success', 'modification effectuées');
            return $this->redirectToRoute('_app_user_account');
           
        }

        return $this->render('home/user/editCompte.html.twig', ['userForm'=> $form->createView()]);
    }

    /**
     * @Route("profile/inscription/solo", name="inscription_solo"))
     * 
     */
    public function infosInscriptionSolo(InscriptionSoloRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $infos= $repo->findOneByUserId($userId);
        return $this->render('home/user/inscriptionsolo.html.twig', compact('user', 'infos'));
    }
    
    /**
     * @Route("/profile/inscription/solo/edit", name="inscription_solo_edit", methods="GET|POST")
     * @Route("/profile/inscription/solo/minscrire", name="inscription_solo_ajout")
     */
    public function inscriptionSolo(Request $request, EntityManagerInterface $em, InscriptionSoloRepository $repo): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $inscriptionSolo= $repo->findOneByUserId($userId);

        if(!$inscriptionSolo){
            $inscriptionSolo = new inscriptionSolo();
            $inscriptionSolo->setUser($user);
        }

       $modif = $inscriptionSolo->getUser() !== $user;

       $form = $this->createForm(InscriptionSoloFormType::class, $inscriptionSolo);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em->persist($inscriptionSolo);
           $em->flush();

           $this->addFlash('message', $modif ? 'Inscription modifié avec succès' : 'Inscription effectué avec succès');

           return $this->redirectToRoute('inscription_solo');
       }

       return $this->render('home/user/editInscriptionSolo.html.twig',['formulaireSolo'=>$form->createView()]);

    }

    /**
     * @Route("profile/inscription/solo/{id}/delete", name="inscription_solo_delete", methods="SUPUSERSOLO")
     */
    public function deleteInscriptionSolo(Request $request, InscriptionSolo $inscriptionSolo): Response
    {

        if ($this->isCsrfTokenValid('SUPUSERSOLO'.$inscriptionSolo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($inscriptionSolo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('inscription_solo');
    }
    
}
