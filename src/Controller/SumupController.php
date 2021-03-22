<?php
// src/Controller/PagesController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\DiskRepository;
use App\Repository\ArtistRepository;
use App\Repository\ProductionRepository;
use App\Repository\StyleRepository;
use App\Controller\DiskController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\DiskType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Disk;

class SumupController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home(DiskRepository $diskRepository)
    {
        $disks = $diskRepository->findAll();
        return $this->render (
            'home.html.twig', [
                'h1' => 'Accueil',
                'total_references' => sizeof($disks),
                'most_referenced_genre' => 'jazz',
                'most_referenced_genre_total' => 2,
                'most_referenced_artist' => 'Natos y Waor',
                'most_referenced_artist_total' => 12,
                'last_referenced_name' => 'Siempre',
                'last_referenced_artist' => 'Denom',
                'last_referenced_registered' => '01-01-2021',
                'total_stock' => 142,
                'max_stocked_disk_stock' => 13,
                'max_stocked_disk_name' => 'Angel',
                'max_stocked_disk_artist' => 'Massive Attack',
                'total_out_of_stock' => 31,
            ]
        );
    }

    /**
     * @Route("/import")
     */
    public function import() : Response
    {
        return $this->render('import.html.twig');
    }
    
}
