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
     * @Route("/", name="home")
     */
    public function home(DiskRepository $diskRepository, ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository) : Response
    {   
        if( !empty($diskRepository->findAll()) && !empty($artistRepository->findAll()) && !empty($styleRepository->findAll()) && !empty($productionRepository->findAll())) :
            $stylesScores = [];
            foreach ($styleRepository->findAll() as $style) : 
                $stylesScores[$style->getId()] = sizeof($diskRepository->findBy(['style' => $style]));
            endforeach;
            arsort($stylesScores, SORT_NUMERIC);
            $mostRefStyle = array_keys($stylesScores)[0];
            $mostRefStyleName = $styleRepository->find($mostRefStyle)->getName();
            $mostRefStyleScore = array_values($stylesScores)[0];

            $artistsScores = [];
            foreach ($artistRepository->findAll() as $artist) : 
                $artistsScores[$artist->getId()] = sizeof($diskRepository->findBy(['artist' => $artist]));
            endforeach;
            arsort($artistsScores, SORT_NUMERIC);
            $mostRefArtist = array_keys($artistsScores)[0];
            $mostRefArtistName = $artistRepository->find($mostRefArtist)->getName();
            $mostRefArtistScore = array_values($artistsScores)[0];

            $productionsScores = [];
            foreach ($productionRepository->findAll() as $production) : 
                $productionsScores[$production->getId()] = sizeof($diskRepository->findBy(['production' => $production]));
            endforeach;
            arsort($productionsScores, SORT_NUMERIC);
            $mostRefProduction = array_keys($productionsScores)[0];
            $mostRefProductionName = $productionRepository->find($mostRefProduction)->getName();
            $mostRefProductionScore = array_values($productionsScores)[0];

            $outOfStock = [];
            $stock = 0;
            foreach($diskRepository->findAll() as $disk) :
                if($disk->getStock() >= 1) :
                    $stock += $disk->getStock();
                else : 
                    $outOfStock[$disk->getId()] = $disk->getName();
                endif;
            endforeach;

            return $this->render (
                'home.html.twig', [
                    'h1' => 'Accueil',
                    'total_disks' => sizeof($diskRepository->findAll()),
                    'total_artists' => sizeof($artistRepository->findAll()),
                    'total_productions' => sizeof($productionRepository->findAll()),
                    'total_styles' => sizeof($styleRepository->findAll()),
                    'most_referenced_style_id' => $mostRefStyle,
                    'most_referenced_style_name' => $mostRefStyleName,
                    'most_referenced_style_total' => $mostRefStyleScore,
                    'most_referenced_artist_id' => $mostRefArtist,
                    'most_referenced_artist_name' => $mostRefArtistName,
                    'most_referenced_artist_total' => $mostRefArtistScore,
                    'most_referenced_production_id' => $mostRefProduction,
                    'most_referenced_production_name' => $mostRefProductionName,
                    'most_referenced_production_total' => $mostRefProductionScore,
                    'stock' => $stock,
                    'out_stock' => $outOfStock,
                    'message'=>''
                ]
            );
        else : 
             return $this->render (
                'home.html.twig', [
                    'h1' => 'Accueil',
                    'total_disks' => '-',
                    'total_artists' => '-',
                    'total_productions' => '-',
                    'total_styles' => '-',
                    'most_referenced_style_id' => '-',
                    'most_referenced_style_name' => '-',
                    'most_referenced_style_total' => '-',
                    'most_referenced_artist_id' => '-',
                    'most_referenced_artist_name' => '-',
                    'most_referenced_artist_total' => '-',
                    'most_referenced_production_id' => '-',
                    'most_referenced_production_name' => '-',
                    'most_referenced_production_total' => '-',
                    'stock' => '-',
                    'out_stock' => '-',
                    'message'=> 'La base de données est vide ou presque vide !'
                ]
            );

        endif;
    }

    /**
     * @Route("/import", name="import")
     */
    public function import() : Response
    {
        return $this->render('import.html.twig');
    }
    
}
