<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\DiskRepository;
use App\Repository\StyleRepository;
use App\Entity\Style;
use App\Form\StyleType;


class StyleController extends AbstractController
{

   /**
     * @Route("/styles")
     */
    public function styles(StyleRepository $styleRepository) : Response
    {
        $requestedStyles = $styleRepository->findAll();
        return $this->render(
            'styles.html.twig', [
                'h1' => 'Genres',
                'styles' => $requestedStyles
            ]
        );
    }
 
    /**
    * @Route("/styles/add")
    */
    public function add(Request $request,ValidatorInterface $validator):  Response
    {
        $style = new Style();
        $form = $this->createForm(StyleType::class, $style);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            $style = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($style);
            $entityManager->flush();
            return $this->redirect('/styles');
        }
        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un genre',
            'form' => $form->createView(),
            'form_script'=>''
        ]);
    }

   /**
     * @Route("/styles/set/{id}", methods={"GET", "POST"})
     */
    public function setStyle(Style $style, Request $request): Response
    {    
        $form = $this->createForm(StyleType::class, $style);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $style = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($style);
            $entityManager->flush();
            return $this->redirect('/styles');
        }
        return $this->render('form.html.twig', [
            'h1'=>'Modifcation d\'un genre',
            'form' => $form->createView(),
            'form_script' => '',
        ]);
    }

    /**
     * @Route("/styles/{id}", methods={"GET"})
    */
    public function style(Style $style,  DiskRepository $diskRepository) : Response
    {
        return $this->render('style_solo.html.twig', [
            'h1' => 'Genre : '.$style->getName(),
            'style' => $style,
            'disks' => $style->getDisks(),
            'script' => '/assets/js/styles.js'
        ]);
    }
}
