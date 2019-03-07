<?php

namespace App\Controller;

use App\Entity\Events;
use App\Entity\Contact;
use App\Controller\EventsController;
use App\Repository\EventsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function contact(Request $request, \Swift_Mailer $mailer, EventsRepository $repo, PaginatorInterface $paginator)
    {
		$events = $paginator->paginate( $this->getDoctrine()
                      ->getRepository(Events::class)
                      ->findAll(),
                      $request->query->getInt('page', 1),
                      6
                  );
		//dump($events);
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
                ->add('nom',TextType::class)
                ->add('prenom',TextType::class)
    			->add('email',EmailType::class)
    			->add('sujet',TextType::class)
            	->add('message',TextareaType::class)
            	->add('envoyer',SubmitType::class)
            	->getForm();
        
        $form->handleRequest($request);

    	if ($form->isSubmitted() && $form->isValid()) {

    		
    			$donnee = $form->getData();

			    $message = (new \Swift_Message('Hello Email'))
					        ->setFrom('send@example.com')
					        ->setTo('cd87@sportspourtous.org')
					        ->setBody(
		            $this->render(
		                // templates/emails/registration.html.twig
		                'home/mail.html.twig', [
		                	'donnee' => $donnee
		                ]),
		            'text/html'
                    );      
                    
                $mailer->send($message);
                
    	}
        return $this->render('home/index.html.twig', [
			'events' => $events,
            'form' => $form->createView(), 
		]); 
	}

}
