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
                'h1' => 'Productions',
                'labels' => $requestedProductions
            ]
        );
    }
    
    /**
    * @Route("/productions/add", name="add_production")
    */
    public function add(Request $request,ValidatorInterface $validator, ProductionRepository $productionRepository):  Response
    {
        $production = new Production();
        $form = $this->createForm(ProductionType::class, $production);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $production = $form->getData();
            if ($productionRepository->findOneBy(['name'=>$form['name']->getData()]) === null) :
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($production);
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
    }

    /**
     * @Route("/productions/{id}", methods={"GET"}, name="production")
    */
    public function production(Production $production,  DiskRepository $diskRepository) : Response
    {
        return $this->render('production_solo.html.twig', [
            'h1' => 'Label : '.$production->getName(),
            'production' => $production,
            'disks' => $production->getDisks(),
            'script' => '/assets/js/productions.js'
        ]);
    }

    /**
     * @Route("/productions/set/{id}", methods={"GET", "POST"}, name="set_production")
     */
    public function setProduction(Production $production, Request $request): Response
    {    
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
