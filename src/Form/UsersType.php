<?php

namespace App\Form;

use App\Entity\Users;
use App\Form\UsersType;
use App\Entity\Activites;
use App\Entity\Association;
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
            ->add('num_licence', ChoiceType::class, [ 'label' => 'Numéro de licence'])
            ->add('association',EntityType::class, [
                'class' => Association::class,
                'label' => 'choisir l\'association'
            ])
            ->add('civilite', ChoiceType::class, [ 
                'label' => 'Choisir la civilité',
                'choices' => [
                    'Mr' => 'Monsieur',
                    'Mme' => 'Madame',
                ]
            ])
            ->add('nom_user', ChoiceType::class, [ 'label' => 'Nom'])
            ->add('nom_fille', ChoiceType::class, [ 'label' => 'Nom de jeune fille'])
            ->add('prenom_user', ChoiceType::class, [ 'label' => 'Prénom'])
            ->add('date_naissance', ChoiceType::class, [ 'label' => 'Date de naissance'])
            ->add('tel1', ChoiceType::class, [ 'label' => 'Numéro de téléphone 1'])
            ->add('tel2', ChoiceType::class, [ 'label' => 'Numéro de téléphone 2'])
            ->add('email_user', ChoiceType::class, [ 'label' => 'Email'])
            ->add('rue', ChoiceType::class, [ 'label' => 'Adresse (numéro, rue)'])
            ->add('cp_user', ChoiceType::class, [ 'label' => 'Code postal'])
            ->add('ville_user', ChoiceType::class, [ 'label' => 'Ville'])
            ->add('activite_user', EntityType::class,[
                'class' => Activites::class,
                'multiple' => true
            ])
            ->add('role', ChoiceType::class, [ 
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
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
