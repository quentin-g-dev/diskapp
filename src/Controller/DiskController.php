<?php

namespace App\Controller;
use App\Entity\Disk;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\DiskRepository;
use App\Repository\ArtistRepository;
use App\Repository\ProductionRepository;
use App\Repository\StyleRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Form\DiskType;

class DiskController extends AbstractController
{
    /**
    * @Route("/disks", name="disks")
    */
    public function disks(DiskRepository $diskRepository, ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository) : Response
    {
        $requestedDisks = $diskRepository->findAll();
        foreach ($requestedDisks as $disk) : 
            $artist = $artistRepository->find($disk->getArtist());
            $artist->setName($artist->getName());
            $disk->setArtist($artist);
            $production = $productionRepository->find($disk->getProduction()->getId());
            $production->setName($production->getName());
            $disk->setProduction($production);
            $style = $styleRepository->find($disk->getStyle()->getId());
            $style->setName($style->getName());
            $disk->setStyle($style);
        endforeach;
        /* return $this->render('debug.html.twig', ['h1' => 'Debug', 'debug' => $requestedDisks] );*/ // Debug line
      return $this->render(
            'disks.html.twig', [
                'h1' => 'Disques',
                'disks' => $requestedDisks
            ]
        ); 
    }

    /**
    * @Route("/disks/add", name="add_disk")
    */
    public function add(Request $request, ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository):  Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $disk = new Disk();
        $disk->setRegistered(new \DateTime('now'));
        $form = $this->createForm(DiskType::class, $disk);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form['artist']=== '0') :
                $disk->setArtist($artistRepository->find(23));
            else :
                $artist = $artistRepository->find($form->getData()->getArtist()->getId());
                $disk->setArtist($artist);
            endif;
            $production = $productionRepository->find($form->getData()->getProduction()->getId());
            $disk->setProduction($production);
            $disk->setPublished($form['published']->getData());
            $style = $styleRepository->find($form->getData()->getStyle()->getId());
            $disk->setStyle($style);
            $disk->setCurator($this->getUser());
            if (is_null($form['img']->getData())) :
                $disk->setImg('/assets/img/diskapp_cd.png');
            else :
                $file = $form['img']->getData();
                if($file->guessExtension() === 'jpg' || $file->guessExtension() === 'jpeg' || $file->guessExtension() == 'png') :
                    $directory = '.'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'upload';
                    $fileName = $disk->getName().'_'.$disk->getId().'_'.preg_replace('/s/', '', $disk->getArtist()->getName()).'.'.$file->getExtension();
                    $file->move($directory, $fileName);
                    $disk->setImg('/assets/img/upload/'.$fileName.DIRECTORY_SEPARATOR.$file->getExtension());
                else : 
                    $disk->setImg('/assets/img/diskapp_cd.png');
                endif;
            endif;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disk);
            $entityManager->persist($artist);
            $entityManager->persist($production);
            $entityManager->persist($style);
            $entityManager->flush();
            
            /* return $this->render('debug.html.twig', ['h1'=>'DEBUG', 'debug' => $disk ]);*/ // Debug line
            return $this->redirect('/disks');
        }

        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un disque',
            'form' => $form->createView(),
            'form_script'=>'/assets/js/new_disk_form.js'
        ]);
    }

    /**
     * @Route("/disks/{id}", methods={"GET"}, name="disk")
    */
    public function disk(Disk $disk, ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository) : Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY') && $disk->getCurator()->getId() === $this->getUser()->getId()) :
            $mine= true; 
        else :
            $mine = false;       
        endif; 
        $artist = $artistRepository->find($disk->getArtist());
        $artist->setName($artist->getName());
        $disk->setArtist($artist);
        $production = $productionRepository->find($disk->getProduction()->getId());
        $production->setName($production->getName());
        $disk->setProduction($production);
        $style = $styleRepository->find($disk->getStyle()->getId());
        $style->setName($style->getName());
        $disk->setStyle($style);
        return $this->render('disk_solo.html.twig', [
            'h1' => $disk->getName().' - '.$disk->getArtist()->getName(),
            'controller_name' => 'DiskController',
            'disk' => $disk,
            'mine'=>$mine
        ]);
    }

    /**
     * @Route("/disks/set/{id}", methods={"GET", "POST"}, name="set_disk")
     */
    public function setDisk(Disk $disk, Request $request,  ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository): Response
    {    
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(DiskType::class, $disk);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $artist = $artistRepository->find($form->getData()->getArtist()->getId());
            $disk->setArtist($artist);
            $production = $productionRepository->find($form->getData()->getProduction()->getId());
            $disk->setProduction($production);
            $style = $styleRepository->find($form->getData()->getStyle()->getId());
            $disk->setStyle($style);
            $file = $form['img']->getData();
            $directory = '.'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'upload';
            $fileName = $disk->getName().'_'.$disk->getId().'_'.preg_replace('/s/', '', $disk->getArtist()->getName()).'.'.$file->guessExtension();
            $file->move($directory, $fileName);
            $disk->setImg('/assets/img/upload/'.$fileName.DIRECTORY_SEPARATOR.$file->getExtension());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disk);
            $entityManager->persist($artist);
            $entityManager->persist($production);
            $entityManager->persist($style);
            $entityManager->flush();
            
            /* return $this->render('debug.html.twig', ['h1'=>'DEBUG', 'debug' => $disk ]);*/ // Debug line
            return $this->redirect('/disks');
        }

        return $this->render('form.html.twig', [
            'h1'=>'Modification d\'un disque',
            'form' => $form->createView(),
            'form_script'=>'/assets/js/new_disk_form.js'
        ]);

        $disk->setName('New product name!');
        $entityManager->flush();
        return $this->redirectToRoute('product_show', [
            'id' => $product->getId()
        ]);
    }
}
