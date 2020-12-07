<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\InscriptionSolo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionSoloFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('createdAt')
            ->add('nomPersoSolo', TextType::class, [
                'label'=>'Nom de mon personnage'])
            ->add('univerSolo', TextType::class, ['label'=>'Univers'])
            ->add('mediaSolo', ChoiceType::class, [
                'choices'  => [
                    'Musique' => true,
                    'Video' => false,
                ],
                'label'=>'Mon type de média'
            ])
            ->add('envoiMediaSolo', ChoiceType::class,[
                'choices'=>[
                    'Avant mon entrée'=> true,
                    'Après mon entrée'=>false
                ],
                'label'=>'Il faut envoyer mon média'
            ])
            ->add('aideSolo', ChoiceType::class,[
                'choices'=>[
                    'Oui'=> true,
                    'Non'=>false
                ],
                'label'=>'J\'ai besoin d\'aide pour monter sur scène'
            ])
            ->add('accessoireSolo', ChoiceType::class,[
                'choices'=>[
                    'Oui'=> true,
                    'Non'=>false
                ],
                'label'=>'J\'ai des accessoire à déposer sur scène avant mon entrée'
            ])
            ->add('descriptionAccessoireSolo', TextareaType::class,['label'=>'Description de mes accessoires à déposer'])
            ->add('infosSolo', TextareaType::class, ['label'=>'Informations complémentaires'])
            //->add('user')
            ->add('categorie',EntityType::class,[
                'class'=>Categorie::class,
            'choice_label'=>'libelleCategorie',
            'multiple'=>false, //choisir plusieurs catégories
            'expanded'=>false
            ])
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InscriptionSolo::class,
            'attr'=>
                ['novalidate'=>'novalidate']
        ]);
    }
}
