<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\ArtistRepository;

use App\Entity\Artist;
use App\Form\ArtistType;


class ArtistController extends AbstractController
{

    
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
    * @Route("/artists/add")
    */
    public function add(Request $request,ValidatorInterface $validator):  Response
    {
        $artist = new Artist();

        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            $artist = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artist);
            $entityManager->flush();

            return $this->redirect('/artists');
        }
        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un artiste',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/artist/create", name="create_artist")
     */
    public function createArtist(ValidatorInterface $validator): Response
    {
        
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createArtist(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $artist = new Artist();
        $artist->setName('ArtistName');
       
        // tell Doctrine you want to (eventually) save the Artist (no queries yet)
        $entityManager->persist($artist);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // Basic validator errors handling
        $errors = $validator->validate($artist);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }

        return new Response('Saved new artist with id '.$artist->getId());
    }
}
