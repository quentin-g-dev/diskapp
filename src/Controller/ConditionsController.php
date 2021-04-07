<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConditionsController extends AbstractController
{
    /**
     * @Route("/conditions", name="conditions")
     */
    public function index(): Response
    {
        return $this->render('conditions.html.twig', [
            'h1'=> 'Conditions d\'utilisation',
            'controller_name' => 'ConditionsController',
        ]);
    }
}
