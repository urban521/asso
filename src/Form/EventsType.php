<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', ChoiceType::class, [ 'label' => 'Titre'])
            ->add('lieu', ChoiceType::class, [ 'label' => 'Lieu'])
            ->add('date_event', ChoiceType::class, [ 'label' => 'Date de l\'évenement'])
            ->add('pic_event1', ChoiceType::class, [ 'label' => 'image 1'])
            ->add('pic_event2', ChoiceType::class, [ 'label' => 'image 2'])
            ->add('pic_event3', ChoiceType::class, [ 'label' => 'image 3'])
            ->add('pic_event4', ChoiceType::class, [ 'label' => 'image 4'])
            ->add('participe_oui')
            ->add('participe_non')
            ->add('participe_pe')
            ->add('descript_event', ChoiceType::class, [ 'label' => 'Description de l\'événement'])
            ->add('users')
            ->add('associations')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
