<?php

namespace App\Form;

use App\Entity\Users;
use App\Form\UsersType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num_licence')
            ->add('civilite_mr')
            ->add('civilite_mme')
            ->add('nom_user')
            ->add('nom_fille')
            ->add('prenom_user')
            ->add('date_naissance')
            ->add('tel1')
            ->add('tel2')
            ->add('email_user')
            ->add('rue')
            ->add('cp_user')
            ->add('ville_user')
            ->add('activite_user')
            ->add('events')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
