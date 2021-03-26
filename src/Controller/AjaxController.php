<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ArtistRepository;
use App\Controller\ArtistController;
use App\Entity\Artist;

use App\Repository\ProductionRepository;
use App\Controller\ProductionController;
use App\Entity\Production;

use App\Repository\StyleRepository;
use App\Controller\StyleController;
use App\Entity\Style;

use App\Repository\DiskRepository;
use App\Controller\DiskController;
use App\Entity\Disk;




class AjaxController extends AbstractController
{
    /**
     * @Route("/ajax_add_one_artist")
     */
    public function addOneArtist(Request $request, ArtistRepository $artistRepository) :JsonResponse
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $artistName = htmlentities($request->request->get('newArtist'));
            // Returning an error if user submitted a blank or blank spaced string
            if (trim($artistName) === '') :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Error'
                ], 400);
            endif;
            // Checking if the artist name is already known
            if ($artistRepository->findOneBy(['name'=>$artistName]) === null) :
                $entityManager = $this->getDoctrine()->getManager();
                $artist = new Artist();
                $artist->setName($artistName);
                $entityManager->persist($artist);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Created',
                    'message' => $artist->getId()
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Known',
                    'message' => $artistRepository->findOneBy(['name'=>$artistName])->getId()
                ], 200);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }

    /**
     * @Route ("/ajax_delete_one_artist")
     */
    public function deleteOneArtist(Request $request, ArtistRepository $artistRepository, DiskRepository $diskRepository) :JsonResponse 
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlentities($request->request->get('artist'));
            // Checking if the artist name is already known
            if ($artist = $artistRepository->find($id)) :
                if($disks = $diskRepository->findBy(['artist'=> $id])) :
                    $noArtist = $artistRepository->find(23);
                    foreach($disks as $disk) :
                        $disk->setArtist($noArtist);
                    endforeach;
                endif;
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($artist);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Deleted',
                    'message' => 'Success'
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Artiste non reconnu'
                ], 400);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }

    /**
     * @Route("/ajax_add_one_production")
     */
    public function addOneProduction(Request $request, ProductionRepository $productionRepository) :JsonResponse
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $productionName = htmlentities($request->request->get('newProduction'));
            // Returning an error if user submitted a blank or blank spaced string
            if (trim($productionName) === '') :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Error'
                ], 400);
            endif;
            // Checking if the production name is already known
            if ($productionRepository->findOneBy(['name'=>$productionName]) === null) :
                $entityManager = $this->getDoctrine()->getManager();
                $production = new Production();
                $production->setName($productionName);
                $entityManager->persist($production);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Created',
                    'message' => $production->getId()
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Known',
                    'message' => $productionRepository->findOneBy(['name'=>$productionName])->getId()
                ], 200);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }

    /**
     * @Route ("/ajax_delete_one_production")
     */
    public function deleteOneProduction(Request $request, ProductionRepository $productionRepository, DiskRepository $diskRepository) :JsonResponse 
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlentities($request->request->get('production'));
            if ($production = $productionRepository->find($id)) :
                if($disks = $diskRepository->findBy(['production'=> $id])) :
                    $noProduction = $productionRepository->find(6);
                    foreach($disks as $disk) :
                        $disk->setProduction($noProduction);
                    endforeach;
                endif;
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($production);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Deleted',
                    'message' => 'Success'
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Label non reconnu'
                ], 400);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }


    /**
     * @Route("/ajax_add_one_style")
     */
    public function addOneStyle(Request $request, StyleRepository $styleRepository) :JsonResponse
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $styleName = htmlentities($request->request->get('newStyle'));
            // Returning an error if user submitted a blank or blank spaced string
            if (trim($styleName) === '') :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Error'
                ], 400);
            endif;
            // Checking if the style name is already known
            if ($styleRepository->findOneBy(['name'=>$styleName]) === null) :
                $entityManager = $this->getDoctrine()->getManager();
                $style = new Style();
                $style->setName($styleName);
                $entityManager->persist($style);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Created',
                    'message' => $style->getId()
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Known',
                    'message' => $styleRepository->findOneBy(['name'=>$styleName])->getId()
                ], 200);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }

    /**
     * @Route ("/ajax_delete_one_style")
     */
    public function deleteOneStyle(Request $request, StyleRepository $styleRepository, DiskRepository $diskRepository) :JsonResponse 
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlentities($request->request->get('style'));
            if ($style = $styleRepository->find($id)) :
                if($disks = $diskRepository->findBy(['style'=> $id])) :
                    $noStyle = $styleRepository->find(8);
                    foreach($disks as $disk) :
                        $disk->setStyle($noStyle);
                    endforeach;
                endif;
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($style);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Deleted',
                    'message' => 'Success'
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Genre non reconnu'
                ], 400);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }



    /**
     * @Route ("/ajax_delete_one_disk")
     */
    public function deleteOneDisk(Request $request, DiskRepository $diskRepository) :JsonResponse 
    {
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlentities($request->request->get('disk'));
            if ($disk = $diskRepository->find($id)) :
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($disk);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Deleted',
                    'message' => 'Success'
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Disque non reconnu'
                ], 400);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }

}