<?php

namespace App\Controller;
use App\Entity\Disk;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\DiskRepository;
use App\Repository\ArtistRepository;
use App\Repository\ProductionRepository;
use App\Repository\StyleRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Form\DiskType;


class DiskController extends AbstractController
{

    /**
    * @Route("/disks")
    */
    public function disks(DiskRepository $diskRepository, ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository) : Response
    {
        $requestedDisks = $diskRepository->findAll();
        foreach ($requestedDisks as $disk) : 
            $artistId = $disk->getArtist();
            $artist = $artistRepository->find($artistId);
            $artist->setName($artist->getName());
            $disk->setArtist($artist);
            $productionId = $disk->getProduction()->getId();
            $production = $productionRepository->find($productionId);
            $production->setName($production->getName());
            $disk->setProduction($production);
            $styleId = $disk->getStyle()->getId();
            $style = $styleRepository->find($styleId);
            $style->setName($style->getName());
            $disk->setStyle($style);
        endforeach;
        /* return $this->render(
            'debug.html.twig', [                
                'h1' => 'Debug',

                'debug' => $requestedDisks
            ]
        );*/
      return $this->render(
            'disks.html.twig', [
                'h1' => 'Disques',
                'disks' => $requestedDisks
            ]
        ); 
    }

    /**
    * @Route("/disks/add")
    */
    public function add(Request $request, ArtistRepository $artistRepository, ProductionRepository $productionRepository, StyleRepository $styleRepository):  Response
    {
        // creates a disk object and initializes registration date
        $disk = new Disk();
        $disk->setRegistered(new \DateTime('now'));

        $form = $this->createForm(DiskType::class, $disk);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $artistId = $form->getData()->getArtist()->getId();
            $artist = $artistRepository->find($artistId);
            $disk->setArtist($artist);
            $productionId = $form->getData()->getProduction()->getId();
            $production = $productionRepository->find($productionId);
            $disk->setProduction($production);
            $styleId = $form->getData()->getStyle()->getId();
            $style = $styleRepository->find($styleId);
            $disk->setStyle($style);
            $file = $form['img']->getData();
            $extension = $file->getExtension();
            $directory = './public/assets/img/upload/';
            $fileName = $disk->getName().'_'.$disk->getId().'_'.$disk->getArtist()->getName().'.'.$extension;

            $file->move($directory, $fileName);
            $disk->setImg($directory.DIRECTORY_SEPARATOR.$fileName);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disk);
            $entityManager->persist($artist);
            $entityManager->persist($production);
            $entityManager->persist($style);
            $entityManager->flush();

            //$disk = $form->getData();
            return $this->render('debug.html.twig', [
                'h1'=>'DEBUG',
                'debug' => $disk,
            ]);

/*
            return $this->redirect('/disks');
        */}

        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un disque',
            'form' => $form->createView(),
        ]);
    }
    
    


    /**
     * @Route("/disk", name="disk")
     */
    public function index(): Response
    {
        return $this->render('disk/index.html.twig', [
            'controller_name' => 'DiskController',
        ]);
    }

    public function allDisks(): Array
    {
        return $diskRepository->findAll();
    }

    /**
     * @Route("/disk/create", name="create_disk")
     */
    public function createDisk(ValidatorInterface $validator): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createDisk(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $disk = new Disk();
        $disk->setName('DiskName');
        $disk->setArtist('1');
        $disk->setProduction(5);
        $disk->setPublished(new \DateTime('02-03-2014'));
        $disk->setImg('./assets/img/diskapp_cd.png');
        $disk->setStyle(7);
        $disk->setStock(5);
        $disk->setRegistered(new \DateTime());
        $disk->setBarcode('testBarcode');

        // tell Doctrine you want to (eventually) save the Disk (no queries yet)
        $entityManager->persist($disk);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // Basic validator errors handling
        $errors = $validator->validate($disk);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }

        return new Response('Saved new disk with id '.$disk->getId());
    }
}
