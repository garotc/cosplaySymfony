<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Group;
use App\Entity\Categorie;
use App\Form\GroupFormType;
use App\Entity\InscriptionSolo;
use App\Form\CategorieFormType;
use App\Entity\InscriptionGroup;
use App\Repository\UserRepository;
use App\Repository\GroupRepository;
use App\Form\EditAccountUserFormType;
use App\Form\InscriptionSoloFormType;
use App\Form\InscriptionGroupFormType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\InscriptionSoloRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\InscriptionGroupRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/admin", name="admin_admin")
     */
    public function index(): Response
    {
        return $this->render('admin/admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
//--------------------------------GESTION DES CATEGORIES--------------------------------//

    /**
     * @Route("/admin/categorie/ajout", name="categorie_ajout")
     */
    public function ajouterCategorie(Categorie $categorie=null, Request $request, EntityManagerInterface $em): Response
    {

        if(!$categorie){
            $categorie = new Categorie();
        }
       $form = $this->createForm(CategorieFormType::class, $categorie);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em->persist($categorie);
           $em->flush();
       }

       return $this->render('admin/ajoutCategorie.html.twig',['formCategorie'=>$form->createView()]);
    }
//--------------------------------GESTION USER--------------------------------//
    /**
     * @Route("/admin/users", name="admin_aff_user")
     */
    public function affUser(UserRepository $repo): Response
    {
        $user = $this->getUser();
        $users = $repo->findAll();
        return $this->render('admin/userAccount.html.twig', compact('users','user'));
    }

    /**
     * @Route("/admin/user/{id}", name="admin_user_edit")
     */
     public function editUser(User $user=null, Request $request, EntityManagerInterface $em) : Response
     {
         $modif = $user->getId() !==null;
         $userId = $user->getId();
         $form = $this->createForm(EditAccountUserFormType::class, $user);

         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
            // dd($userId);
             $em->persist($user);
             $em->flush();

             $this->addFlash ('success', $modif? 'modification effectuées' : 'user ajouté');
             return $this->redirectToRoute('admin_aff_user');
            
         }

         return $this->render('admin/editUserAccount.html.twig', ['userForm'=> $form->createView(), 'userId'=>$userId]);
     }

    /**
     * @Route("/admin/user/{id}/sup", name="admin_user_delete", methods="SUP")
     */
    public function deleteUser(User $user = null, Request $request, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('SUP'.$user->getId(), $request->get('_token'))) {
            
            $em->remove($user);
            $em->flush();

            $this->addFlash('message', 'Utilisateur supprimé avec succès');
            return $this->redirectToRoute('admin_aff_user');
        }
    }
//--------------------------------INSCRIPTIONS SOLO--------------------------------//
    /**
     * @Route("/admin/inscription/solo", name="admin_aff_inscription_solo")
     */
    public function affInscriptionSolo(InscriptionSoloRepository $repo): Response
    {
        $inscription = $this->getUser();
        $inscriptionsSolo = $repo->findAll();
   /*      dd($inscriptionsSolo); */
        return $this->render('admin/inscriptionSolo.html.twig', compact('inscriptionsSolo','inscription'));
    }

    /**
     * @Route("admin/inscription/solo/{id}/edit", name="admin_inscription_solo_edit", methods={"GET","POST"})
     */
    public function editInscriptionSolo(Request $request, InscriptionSolo $solo): Response
    {
        $form = $this->createForm(InscriptionSoloFormType::class, $solo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_aff_inscription_solo');
        }

        return $this->render('admin/editinscriptionSolo.html.twig', [
            'solo' => $solo,
            'editsoloform' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/inscription/solo/{id}/delete", name="admin_inscription_solo_delete", methods="SUPSOLO")
     */
    public function deleteInscriptionSolo(Request $request, InscriptionSolo $solo): Response
    {
        if ($this->isCsrfTokenValid('SUPSOLO'.$solo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($solo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_aff_inscription_solo');
    }
//--------------------------------GESTION GROUPE--------------------------------//
    /**
     * @Route("/admin/groupe", name="admin_aff_groupe")
     */
    public function affGroup(GroupRepository $repo): Response
    {
        $creation = $this->getUser();
        $group = $repo->findAll();
        //dd($inscriptionsSolo); 
        return $this->render('admin/group.html.twig', compact('creation','group'));
    }
    /**
     * @Route("admin/group/{id}/edit", name="admin_groupe_edit", methods={"GET","POST"})
     */
    public function editGroupe(Request $request, Group $group): Response
    {
        $form = $this->createForm(GroupFormType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_aff_groupe');
        }

        return $this->render('admin/editGroup.html.twig', [
            'group' => $group,
            'editgroupform' => $form->createView(),
        ]);
    }
    /**
     * @Route("admin/groupe/{id}/delete", name="admin_groupe_delete", methods="SUPGROUP")
     */
    public function deleteGroup(Request $request, Group $group): Response
    {
        if ($this->isCsrfTokenValid('SUPGROUP'.$group->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_aff_groupe');
    }
//--------------------------------INSCRIPTIONS GROUPE--------------------------------//
    /**
     * @Route("/admin/inscription/groupe", name="admin_aff_inscription_groupe")
     */
    public function affInscriptionGroup(InscriptionGroupRepository $repo): Response
    {
        $creation = $this->getUser();
        $inscriptionsGroup = $repo->findAll();
        //dd($inscriptionsSolo); 
        return $this->render('admin/inscriptionGroup.html.twig', compact('creation','inscriptionsGroup'));
    }
    /**
     * @Route("admin/inscription/group/{id}/edit", name="admin_inscription_groupe_edit", methods={"GET","POST"})
     */
    public function editInscriptionGroup(Request $request, InscriptionGroup $inscriptiongroup): Response
    {
        $form = $this->createForm(InscriptionGroupFormType::class, $inscriptiongroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_aff_inscription_groupe');
        }

        return $this->render('admin/editGroup.html.twig', [
            'inscriptiongroup' => $inscriptiongroup,
            'editgroupform' => $form->createView(),
        ]);
    }
    /**
     * @Route("admin/inscription/group/{id}/delete", name="admin_inscription_groupe_delete", methods="SUPINSCRIGROUP")
     */
    public function deleteInscriptionGroup(Request $request, InscriptionGroup $inscriptionGroup): Response
    {
        if ($this->isCsrfTokenValid('SUPINSCRIGROUP'.$inscriptionGroup->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($inscriptionGroup);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_aff_inscription_groupe');
    }
}
