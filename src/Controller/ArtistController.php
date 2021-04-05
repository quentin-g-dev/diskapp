<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\ArtistRepository;
use App\Repository\DiskRepository;

use App\Entity\Artist;
use App\Form\ArtistType;

class ArtistController extends AbstractController
{
    /**
     * @Route("/artists", name="artists")
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
    * @Route("/artists/add", name="add_artist")
    */
    public function add(Request $request,ValidatorInterface $validator, ArtistRepository $artistRepository):  Response
    {
        $artist = new Artist();
        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $artist = $form->getData();
            if ($artistRepository->findOneBy(['name'=>$form['name']->getData()]) === null) :

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($artist);
                $entityManager->flush();
                return $this->redirect('/artists');
            else :
                return $this->redirect("/artists/".$artistRepository->findOneBy(['name'=>$form['name']->getData()])->getId());

            endif;
        }
        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un artiste',
            'form' => $form->createView(),
            'form_script' => '',
        ]);
    }

    /**
     * @Route("/artists/{id}", methods={"GET"}, name="artist")
    */
    public function artist(Artist $artist,  DiskRepository $diskRepository) : Response
    {
        return $this->render('artist_solo.html.twig', [
            'h1' => 'Artiste : '.$artist->getName(),
            'artist' => $artist,
            'disks' => $artist->getDisks(),
            'script' => '/assets/js/artists.js'

        ]);
    }

    /**
     * @Route("/artists/set/{id}", methods={"GET", "POST"}, name="set_artist")
     */
    public function setArtist(Artist $artist, Request $request): Response
    {    
        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $artist = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artist);
            $entityManager->flush();
            return $this->redirect('/artists');
        }
        return $this->render('form.html.twig', [
            'h1'=>'Modification d\'un artiste',
            'form' => $form->createView(),
            'form_script' => '',
        ]);
    }
}
