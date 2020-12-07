<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Categorie;
use App\Entity\InscriptionSolo;
use App\Form\CategorieFormType;
use App\Repository\UserRepository;
use App\Form\EditAccountUserFormType;
use App\Form\InscriptionSoloFormType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\InscriptionSoloRepository;
use Symfony\Component\HttpFoundation\Request;
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

         $form = $this->createForm(EditAccountUserFormType::class, $user);

         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
             
             $em->persist($user);
             $em->flush();

             $this->addFlash ('success', $modif? 'modification effectuées' : 'user ajouté');
             return $this->redirectToRoute('admin_aff_user');
            
         }

         return $this->render('admin/editUserAccount.html.twig', ['userForm'=> $form->createView()]);
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

}
