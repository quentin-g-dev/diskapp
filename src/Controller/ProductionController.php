<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProductionRepository;
use App\Entity\Production;
use App\Form\ProductionType;
use App\Repository\DiskRepository;

class ProductionController extends AbstractController
{
   /**
     * @Route("/productions", name="productions")
     */
    public function labels(ProductionRepository $labelRepository) : Response
    {
        $requestedProductions = $labelRepository->findAll();
        return $this->render(
            'productions.html.twig', [
                'h1' => 'Labels',
                'labels' => $requestedProductions
            ]
        );
    }
    
    /**
    * @Route("/productions/add", name="add_production")
    */
    public function add(Request $request,ValidatorInterface $validator, ProductionRepository $productionRepository):  Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if($this->getUser()->getActionsCounter()>0) :
            $production = new Production();
            $form = $this->createForm(ProductionType::class, $production);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $production = $form->getData();
                $production->setCurator($this->getUser());
                if ($productionRepository->findOneBy(['name'=>$form['name']->getData()]) === null) :
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($production);
                    $this->getUser()->SetActionsCounter($this->getUser()->getActionsCounter()-1);
                    $entityManager->persist($this->getUser());
                    $entityManager->flush();
                    return $this->redirect('/productions');
                else :
                    return $this->redirect("/productions/".$productionRepository->findOneBy(['name'=>$form['name']->getData()])->getId());
                endif;
            }
            return $this->render('form.html.twig', [
                'h1'=>'Ajouter un label',
                'form' => $form->createView(),
                'form_script'=>'',
            ]);
        else :
            return $this->redirectToRoute('empty_counter');
        endif;
    }

    /**
     * @Route("/productions/{id}", methods={"GET"}, name="production")
    */
    public function production(Production $production,  DiskRepository $diskRepository) : Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY') && $production->getCurator()->getId() === $this->getUser()->getId()) :
            $mine= true; 
        else :
            $mine = false;       
        endif; 
        return $this->render('production_solo.html.twig', [
            'h1' => 'Label : '.$production->getName(),
            'production' => $production,
            'disks' => $production->getDisks(),
            'script' => '/assets/js/productions.js',
            'mine' =>$mine
        ]);
    }

    /**
     * @Route("/productions/set/{id}", methods={"GET", "POST"}, name="set_production")
     */
    public function setProduction(Production $production, Request $request): Response
    {    
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(ProductionType::class, $production);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $production = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($production);
            $entityManager->flush();
            return $this->redirect('/productions');
        }
        return $this->render('form.html.twig', [
            'h1'=>'Modification du label',
            'form' => $form->createView(),
            'form_script' => '',
        ]);
    }
}
