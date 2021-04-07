<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\UserRepository;
use App\Entity\User;
use App\Controller\UserController;
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $artistName = htmlspecialchars($request->request->get('newArtist'), ENT_COMPAT, 'ISO-8859-15', false);
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
                $artist->setCurator($this->getUser());
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
        // In case something goes wrong
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlspecialchars($request->request->get('artist'));
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $productionName = htmlspecialchars($request->request->get('newProduction'));
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
                $production->setCurator($this->getUser());
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlspecialchars($request->request->get('production'));
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $styleName = htmlspecialchars($request->request->get('newStyle'));
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
                $style->setCurator($this->getUser());
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlspecialchars($request->request->get('style'));
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $id = htmlspecialchars($request->request->get('disk'));
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

     /**
     * @Route("/ajax_set_my_username")
     */
    public function setMyUserName(Request $request, UserRepository $userRepository) :JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Dedicating to ajax calls exclusively
        if (!$request->isXmlHttpRequest()) :
            return new JsonResponse([
                'status' => 'Error',
                'message' => 'Error'
            ], 400);
        endif;
        if(isset($request->request)) :
            // Getting data from ajax
            $newUserName = htmlspecialchars($request->request->get('newUserName'));
            // Returning an error if user submitted a blank or blank spaced string
            if (trim($newUserName) === '') :
                return new JsonResponse([
                    'status' => 'Error',
                    'message' => 'Error'
                ], 400);
            endif;
            // Checking if the user name already exists
            if ($userRepository->findOneBy(['username'=>$newUserName]) === null) :
                $entityManager = $this->getDoctrine()->getManager();
                $user = $userRepository->find($this->getUser());
                $user->setUsername($newUserName);
                $entityManager->persist($user);
                $entityManager->flush();
                return new JsonResponse([
                    'status' => 'Updated',
                    'message' => $user->getId()
                ], 200);
            else :
                return new JsonResponse([
                    'status' => 'Known',
                    'message' => $userRepository->findOneBy(['username'=>$newUserName])->getId()
                ], 200);
            endif;
        endif;
        // In case something went wrong
        return new JsonResponse([
            'status' => 'Error',
            'message' => 'Error'
        ],400);
    }
}