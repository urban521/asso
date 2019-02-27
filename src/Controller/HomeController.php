<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
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
					        ->setTo('samy.aformac2018@gmail.com')
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
            'form' => $form->createView(),
        ]);
    }
}
