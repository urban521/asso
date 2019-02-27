<?php

namespace App\Controller;

use App\Entity\Publique;
use App\Entity\Association;
use App\Repository\AssociationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AssosController extends AbstractController
{
    /**
     * @Route("/assos", name="assos")
     */
    public function index(AssociationRepository $repo) {
        
        $asso=$repo->findAll();
        return $this->render('assos/index.html.twig', [
            'controller_name' => 'AssosController',
            'asso'=>$asso,

        ]);
    }  
    /**
     * @Route("/assos/new", name="new_assos")
     */
    public function newAsso(Request $request) {
        $asso = new Association();
    	$form = $this->createFormBuilder($asso)
    		->add('imageFile',VichImageType::class,[
                'label' => 'logo',
            ])
    		->add('numAsso',IntegerType::class)
            ->add('nomAsso',TextType::class)
            ->add('adresseAsso',TextType::class)
            ->add('cpAsso',IntegerType::class)
            ->add('villeAsso',TextType::class)
            ->add('tel1Asso',TextType::class)
            ->add('tel2Asso',TextType::class)
            ->add('dateCreation',DateType::class)
            ->add('imageFile1',VichImageType::class,[
                'label' => 'status Asso',
            ])
            ->add('imageFile2',VichImageType::class,[
                'label' => 'journal Asso',
            ])
            ->add('imageFile3',VichImageType::class,[
                'label' => 'siret Asso',
            ])
            ->add('imageFile4',VichImageType::class,[
                'label' => 'reglement interieur',
            ])      
            ->add('publique', EntityType::class,[
                'class' => Publique::class,
                'multiple' => true,
                //'choices' => $activites->getTitleActivite(),
            ])
            ->add('imageFile5',VichImageType::class,[
                'label' => 'diplome cadre',
            ])
            ->add('adressCorrespondant',TextType::class)
            ->getForm();
            
            $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $asso = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($asso);
            $entityManager->flush();

            return $this->redirectToRoute('assos');

        }
        return $this->render('assos/newasso.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
