<?php
// src/Controller/PagesController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        $homeData = [
            'total_references' => 125,
            'most_referenced_genre' => 'jazz',
            'most_referenced_genre_total' => 52,
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
        ];

        return $this->render ('home.html.twig', $homeData);
    }

    /**
     * @Route("/disks")
     */
    public function disks() 
    {
        $requestedDisks = [
            'disk1' => [
                'uuid' => 'uuid1',
                'name' => 'name1',
                'artist' => 'artist1',
                'label' => 'label1',
                'published' => 'published1',
                'genre' => 'genre1',
                'stock' => 'stock1',
                'registered' => 'registered1',
            ],
            'disk2' => [
                'uuid' => 'uuid2',
                'name' => 'name2',
                'artist' => 'artist2',
                'label' => 'label2',
                'published' => 'published2',
                'genre' => 'genre2',
                'stock' => 'stock2',
                'registered' => 'registered2',
            ]
        ];
        
        $disksData = [
            'total_disks' => sizeof($requestedDisks),
            'disks' => $requestedDisks, /*  an array with all db's registered disks */
        ];

        return $this->render('disks.html.twig', $disksData);
    }

    /**
     * @Route("/artists")
     */
    public function artists() 
    {
        $requestedArtists = [
            'artist1' => [
                'uuid' => 'uuid1',
                'name' => 'name1',
                'country' => 'country1',
                'registered' => 'registered1',
            ],
            'artist2' => [
                'uuid' => 'uuid2',
                'name' => 'name2',
                'country' => 'country2',
                'registered' => 'registered2',
            ],
        ];
        
        $artistsData = [
            'total_artists' => sizeof($requestedArtists),
            'artists' => $requestedArtists, /*  an array with all db's registered disks */
        ];

        return $this->render('artists.html.twig', $artistsData);
    }

    /**
     * @Route("/labels")
     */
    public function labels() 
    {
        $requestedArtists = [
            'label1' => [
                'uuid' => 'uuid1',
                'name' => 'name1',
                'country' => 'country1',
                'registered' => 'registered1',
            ],
            'label2' => [
                'uuid' => 'uuid2',
                'name' => 'name2',
                'country' => 'country2',
                'registered' => 'registered2',
            ],
        ];
        
        $labelsData = [
            'total_labels' => sizeof($requestedArtists),
            'labels' => $requestedArtists, /*  an array with all db's registered disks */
        ];

        return $this->render('labels.html.twig', $labelsData);
    }

    /**
     * @Route("/import")
     */
    public function import() 
    {
        return $this->render('import.html.twig');
    }


    
}
