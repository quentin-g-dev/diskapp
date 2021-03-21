<?php

namespace App\Controller;
use App\Entity\Disk;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use App\Repository\DiskRepository;


class DiskController extends AbstractController
{

    public function add(Request $request): Response
    {
        // creates a disk object and initializes some data for this example
        $disk = new Disk();

        $form = $this->createFormBuilder($disk)
            ->add('disk', TextType::class)
            ->add('published', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Disk'])
            ->getForm();

            return $form;
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Disk::class,
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
        $disk->setArtists([1,23]);
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
