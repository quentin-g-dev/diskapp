<?php
// src/Controller/PagesController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\DiskRepository;
use App\Repository\ArtistRepository;
use App\Repository\LabelRepository;
use App\Repository\StyleRepository;
use App\Controller\DiskController;
use Symfony\Component\HttpFoundation\Request;



class PagesController extends AbstractController
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
     * @Route("/disks")
     */
    public function disks(DiskRepository $diskRepository) : Response
    {
        $requestedDisks = $diskRepository->findAll();
        return $this->render(
            'disks.html.twig', [
                'h1' => 'Disques',
                'disks' => $requestedDisks
            ]
        );
    }

    /**
     * @Route("/artists")
     */
    public function artists(ArtistRepository $artistRepository) : Response
    {
        $requestedArtists = $artistRepository->findAll();
        return $this->render(
            'artists.html.twig', [
                'h1' => 'Artistes',
                'artists' => $requestedArtists
            ]
        );
    }

    /**
     * @Route("/disks/add")
     */
    public function addADisk() : Response
    {
        $ctrl = new DiskController();
        $form = $ctrl->add(new Request());

        return $this->render(
            'add_disk.html.twig', [
                'h1' => 'Ajouter un disque',
                'form' => $form
            ]
        );
    }

    /**
     * @Route("/labels")
     */
    public function labels(LabelRepository $labelRepository) : Response
    {
        $requestedLabels = $labelRepository->findAll();
        return $this->render(
            'labels.html.twig', [
                'h1' => 'Labels',
                'labels' => $requestedLabels
            ]
        );
    }

    /**
     * @Route("/styles")
     */
    public function styles(StyleRepository $styleRepository) : Response
    {
        $requestedStyles = $styleRepository->findAll();
        return $this->render(
            'styles.html.twig', [
                'h1' => 'Styles',
                'styles' => $requestedStyles
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
