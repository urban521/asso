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
            ->add('titleActivite', ChoiceType::class, [ 'label' => 'titre de l\'activité'])
            ->add('decriptActivite', ChoiceType::class, [ 'label' => 'Description de l\'activité'])
            ->add('imageFile1', ChoiceType::class, [ 'label' => 'image activité 1'])
            ->add('imageFile2', ChoiceType::class, [ 'label' => 'image activité 2'])
            ->add('imageFile3', ChoiceType::class, [ 'label' => 'image activité 3'])
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
