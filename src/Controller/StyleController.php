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
     * @Route("/styles", name="styles")
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
    * @Route("/styles/add", name="add_style")
    */
    public function add(Request $request,ValidatorInterface $validator, StyleRepository $styleRepository):  Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if($this->getUser()->getActionsCounter()>0) :
            $style = new Style();
            $form = $this->createForm(StyleType::class, $style);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $style = $form->getData();
                $style->setCurator($this->getUser());
                if ($styleRepository->findOneBy(['name'=>$form['name']->getData()]) === null) :
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($style);
                    $this->getUser()->SetActionsCounter($this->getUser()->getActionsCounter()-1);
                    $entityManager->persist($this->getUser());
                    $entityManager->flush();
                    return $this->redirect('/styles');
                else :
                    return $this->redirect("/styles/".$styleRepository->findOneBy(['name'=>$form['name']->getData()])->getId());
                endif;
            }
            return $this->render('form.html.twig', [
                'h1'=>'Ajouter un genre',
                'form' => $form->createView(),
                'form_script'=>''
            ]);
        else :
            return $this->redirectToRoute('empty_counter');
        endif;
    }

   /**
     * @Route("/styles/set/{id}", methods={"GET", "POST"}, name="set_style")
     */
    public function setStyle(Style $style, Request $request): Response
    {    
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
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
     * @Route("/styles/{id}", methods={"GET"}, name="style")
    */
    public function style(Style $style,  DiskRepository $diskRepository) : Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY') && $style->getCurator()->getId() === $this->getUser()->getId()) :
            $mine= true; 
        else :
            $mine = false;       
        endif; 
        return $this->render('style_solo.html.twig', [
            'h1' => 'Genre : '.$style->getName(),
            'style' => $style,
            'disks' => $style->getDisks(),
            'script' => '/assets/js/styles.js',
            'mine'=>$mine
        ]);
    }
}
