<?php

namespace App\Form;

use App\Entity\InscriptionSolo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionSoloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('createdAt')
            ->add('nomPersoSolo')
            ->add('univerSolo')
            ->add('mediaSolo')
            ->add('envoiMediaSolo')
            ->add('aideSolo')
            ->add('accessoireSolo')
            ->add('descriptionAccessoireSolo')
            ->add('infosSolo')
            ->add('user')
            ->add('categorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InscriptionSolo::class,
        ]);
    }
}
