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

use App\Form\DiskType;


class DiskController extends AbstractController
{

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
    * @Route("/disks/add")
    */
    public function add(Request $request):  Response
    {
        // creates a disk object and initializes registration date
        $disk = new Disk();
        $disk->setRegistered(new \DateTime());

        $form = $this->createForm(DiskType::class, $disk);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            $disk = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disk);
            $entityManager->flush();

            return $this->redirect('/disks');
        }

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
