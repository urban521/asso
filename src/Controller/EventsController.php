<?php

namespace App\Controller;

use App\Entity\Events;
use App\Controller\EventsController;
use App\Repository\EventsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
     * @Route("/events/new", name="new_event")
     */
    public function newEvent(Request $request) {
        $events = new Events();
    	$form = $this->createFormBuilder($events)
    		->add('title',TextType::class)
    		->add('lieu',TextType::class)
            ->add('dateEvent',DateType::class)
            ->add('picEvent1',TextType::class)
            ->add('picEvent2',TextType::class)
            ->add('picEvent3',TextType::class)
            ->add('picEvent4',TextType::class)
            ->add('participeOui',TextType::class)
            ->add('participeNon',TextType::class)
            ->add('participePe',TextType::class)
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
