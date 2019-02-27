<?php

namespace App\Form;

use App\Entity\Users;
use App\Form\UsersType;
use App\Entity\Activites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num_licence')
            ->add('civilite', ChoiceType::class, [ 
                'label' => 'Choisir votre civilité',
                'choices' => [
                    'Mr' => 'Monsieur',
                    'Mme' => 'Madame',
                ]
            ])
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
            ->add('activite_user', EntityType::class,[
                'class' => Activites::class,
                'multiple' => true
            ])
            /*->add('role', ChoiceType::class, [ 
                'label' => 'Choisissez le role du licencié',
                'choices' => [
                    'Pratiquant' => 'Pratiquant',
                    'Président' => 'Président',
                    'Vice-président' => 'Vice-président',
                    'Secrétaire' => 'Secrétaire',
                    'Vice-secrétaire' => 'Vice-Secrétaire',
                    'Trésorier' => 'Trésorier',
                    'Vice-Trésorier' => 'Vice-Trésorier',
                    'Cadre Technique Principal' => 'Cadre technique Principal',
                    'Cadre Technique Secondaire' => 'Cadre technique Secondaire',
                    'Membre du bureau' => 'Membre du bureau',
                ]
            ])*/
            //->add('events'),
            ->add('association', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
