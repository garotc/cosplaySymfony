<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Entity\Group;
use App\Entity\InscriptionGroup;
use App\Form\GroupFormType;
use App\Entity\InscriptionSolo;
use App\Repository\UserRepository;
use App\Repository\GroupRepository;
use App\Form\EditAccountUserFormType;
use App\Form\InscriptionSoloFormType;
use App\Form\InscriptionGroupFormType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\InscriptionSoloRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\InscriptionGroupRepository;
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
//--------------------------------INSCRIPTIONS SOLO--------------------------------//

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
//--------------------------------CREATION DE GROUPE--------------------------------//

    /**
     * @Route("profile/groupe", name="groupe"))
     * 
     */
    public function infoGroupe(GroupRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $infos= $repo->findOneByUserId($userId);
        return $this->render('home/user/groupe.html.twig', compact('user', 'infos'));
    }

    /**
     * @Route("/profile/creation-groupe/edit", name="creation_groupe_edit", methods="GET|POST")
     * @Route("/profile/creation-groupe/creer", name="creation_groupe_ajout")
     */
    public function createGroup(Request $request, EntityManagerInterface $em, GroupRepository $repo): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $creationGroupe= $repo->findOneByUserId($userId);


        if(!$creationGroupe){
            $creationGroupe = new Group();
            $creationGroupe->setUser($user);
        }

       $modif = $creationGroupe->getUser() !== $user;

       $form = $this->createForm(GroupFormType::class, $creationGroupe);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em->persist($creationGroupe);
           $em->flush();

           $this->addFlash('message', $modif ? 'Groupe modifié avec succès' : 'Inscription effectué avec succès');

           return $this->redirectToRoute('groupe');
       }
       return $this->render('home/user/creationGroupe.html.twig',['formulaireCreaGroupe'=>$form->createView()]);
    }

    /**
     * @Route("profile/groupe/{id}/delete", name="groupe_delete", methods="SUPGROUP")
     */
    public function deleteGroup(Request $request, Group $group): Response
    {

        if ($this->isCsrfTokenValid('SUPGROUP'.$group->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('inscription_solo');
    }
//--------------------------------INSCRIPTIONS MEMBRE GROUPE--------------------------------//

    /**
     * @Route("profile/inscription/groupe", name="inscription_groupe"))
     * 
     */
    public function infosInscriptionGroupe(InscriptionGroupRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $infos= $repo->findOneByUserId($userId);
        return $this->render('home/user/inscriptiongroup.html.twig', compact('user', 'infos'));
    }
    
    /**
     * @Route("/profile/inscription/groupe/edit", name="inscription_groupe_edit", methods="GET|POST")
     * @Route("/profile/inscription/groupe/minscrire", name="inscription_groupe_ajout")
     */
    public function inscriptionGroupe(Request $request, EntityManagerInterface $em, InscriptionGroupRepository $repo): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $inscriptionGroup= $repo->findOneByUserId($userId);

        if(!$inscriptionGroup){
            $inscriptionGroup = new InscriptionGroup();
            $inscriptionGroup->setUser($user);
        }

       $modif = $inscriptionGroup->getUser() !== $user;

       $form = $this->createForm(InscriptionGroupFormType::class, $inscriptionGroup);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em->persist($inscriptionGroup);
           $em->flush();

           $this->addFlash('message', $modif ? 'Inscription modifié avec succès' : 'Inscription effectuée avec succès');
           return $this->redirectToRoute('inscription_groupe');
       }

       return $this->render('home/user/editInscriptionGroup.html.twig',['formulaireMembreGroupe'=>$form->createView()]);
    }
    /**
     * @Route("profile/groupe/{id}/delete", name="inscription_groupe_delete", methods="SUPINSCRIGROUP")
     */
    public function deleteInscriptionGroupe(Request $request, InscriptionGroup $group): Response
    {

        if ($this->isCsrfTokenValid('SUPINSCRIGROUP'.$group->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('inscription_groupe');
    }
    
}
