<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AssosController extends AbstractController
{
    /**
     * @Route("/assos", name="assos")
     */
    public function index()
    {
        return $this->render('assos/index.html.twig', [
            'controller_name' => 'AssosController',
        ]);
    }
}
