<?php

namespace App\Form;

use App\Entity\Activites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitesType extends AbstractType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleActivite')
            ->add('decriptActivite')
            ->add('picActivite1')
            ->add('pic_activite2')
            ->add('pic_activite3')
            ->add('users')
            ->add('associations')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activites::class,
        ]);
    }   
}
