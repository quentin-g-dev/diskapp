<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    /**
     * @Route("/conditions", name="conditions")
     */
    public function conditions(): Response
    {
        return $this->render('static/conditions.html.twig', [
            'h1'=> 'Conditions d\'utilisation',
            'controller_name' => 'StaticController',
        ]);
    }

    /**
     * @Route("/privacy", name="privacy")
     */
    public function privacy(): Response
    {
        return $this->render('static/privacy.html.twig', [
            'h1'=> 'Collecte et traitement des données',
            'controller_name' => 'StaticController',
        ]);
    }

    /**
     * @Route("/legal", name="legal")
     */
    public function legal(): Response
    {
        return $this->render('static/legal.html.twig', [
            'h1'=> 'Informations légales',
            'controller_name' => 'StaticController',
        ]);
    }
}
