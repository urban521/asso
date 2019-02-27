<?php

namespace App\Controller;

use App\Entity\Events;
use App\Controller\EventsController;
use App\Repository\EventsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="events")
     */
    public function index(EventsRepository $repo) {
       
        $events=$repo->findAll();
        return $this->render('events/index.html.twig', [
            'controller_name' => 'EventsController',
            'events'=>$events
        ]);
    }
    /**
     * @Route("/events/{id}/edit", name="modif_event")
     */
    public function modifierProduit($id,Request $request) {
    	$events = $this->getDoctrine()
    	                ->getRepository(Events::class)
    	                ->find($id);

    	$form = $this->createFormBuilder($events)
            ->add('title',TextType::class)
            ->add('lieu',TextType::class)
            ->add('dateEvent',DateType::class)
            ->add('imageFile1',VichImageType::class)
            ->add('imageFile2',VichImageType::class)
            ->add('imageFile3',VichImageType::class)
            ->add('imageFile4',VichImageType::class)
            ->add('participation', ChoiceType::class, [
                'label' => 'allez vous y participer',
                'choices' => [
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                    'peut-etre' => 'peut-etre',
                ]
            ])
            ->add('descriptEvent',TextareaType::class)
            ->getForm();
            
            $form->handleRequest($request);

	    if ($form->isSubmitted() && $form->isValid()) {
	        
	        $events = $form->getData();

	       
	         $entityManager = $this->getDoctrine()->getManager();
	         
	         $entityManager->flush();

	        return $this->redirectToRoute('events');
	    }

        return $this->render('events/newevent.html.twig', [
           'form' => $form->createView(),
           'editMode' => $events->getId() !== null
        ]);
    }
    /**
     * @Route("/events/new", name="new_event")
     */
    public function newEvent(Request $request) {
        $events = new Events();
    	$form = $this->createFormBuilder($events)
    		->add('title',TextType::class)
    		->add('lieu',TextType::class)
            ->add('dateEvent',DateType::class)
            ->add('imageFile1',VichImageType::class)
            ->add('imageFile2',VichImageType::class)
            ->add('imageFile3',VichImageType::class)
            ->add('imageFile4',VichImageType::class)
            ->add('descriptEvent',TextareaType::class)
            ->getForm();
            
            $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $events = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($events);
            $entityManager->flush();

            return $this->redirectToRoute('events');

        }
        return $this->render('events/newevent.html.twig', [
            'form' => $form->createView(),
            'editMode' => $events->getId() !== null
        ]);
    }
    /**
     * @Route("/events/{id}", name="event")
     */
    public function show(EventsRepository $repo, $id) {
    
        $events=$repo->find($id);
        
        return $this->render('events/show.html.twig',[
            'events'=>$events
        ]);
    }
}
