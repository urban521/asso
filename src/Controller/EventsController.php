<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;

class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="events")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Events::class);
        $events=$repo->findAll();
        return $this->render('events/index.html.twig', [
            'controller_name' => 'EventsController',
            'events'=>$events
            
        ]);
    }
}
