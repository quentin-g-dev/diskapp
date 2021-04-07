<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Repository\DiskRepository;
use App\Repository\ArtistRepository;
use App\Repository\StyleRepository;
use App\Repository\ProductionRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\User;


class UserController extends AbstractController
{
    /**
     * @Route("/user/{id}", methods={"GET"}, name="user")
     */
    public function displayUser(User $user, DiskRepository $diskRepository, ArtistRepository $artistRepository, StyleRepository $styleRepository, ProductionRepository $productionRepository): Response
    {
        $disks = $diskRepository->findBy(['curator'=>$user->getId()]);
        $artists = $artistRepository->findBy(['curator'=>$user->getId()]);
        $productions = $productionRepository->findBy(['curator'=>$user->getId()]);
        $styles = $styleRepository->findBy(['curator'=>$user->getId()]);
        if($this->getUser() !== null && $user->getId() === $this->getUser()->getId()) :
                return $this->render('user/myself.html.twig', [
                    'h1' => 'Mon profil',
                    'controller_name' => 'UserController',
                    'user' => $user,
                    'disks' => $disks,
                    'artists' => $artists,
                    'styles' => $styles,
                    'productions' => $productions,
                ]);   
        endif;
        return $this->render('user/user.html.twig', [
            'h1' => 'Profil de '.$user->getUsername(),
            'controller_name' => 'UserController',
            'user' => $user,
            'disks' => $disks,
            'artists' => $artists,
            'styles' => $styles,
            'productions' => $productions,
        ]);     
    }
    /**
     * @Route("/user/delete/{id}", methods={"GET"}, name="delete_user")
     */
    public function deleteUser(User $user,UserRepository $userRepository, SessionInterface $session, TokenStorageInterface $tokenStorage ): RedirectResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if($this->getUser()->getId() === $user->getId()) :
            $userToDelete = $userRepository->find($user->getId());
            $entityManager = $this->getDoctrine()->getManager();
            // force manual logout of logged in user    
            $this->get('security.token_storage')->setToken(null);
            $entityManager->remove($userToDelete);
            $entityManager->flush();
            $session->invalidate(0);
        endif;
        return $this->redirectToRoute('home');  
    }
}
