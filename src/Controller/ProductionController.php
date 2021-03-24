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


class ProductionController extends AbstractController
{
   /**
     * @Route("/productions")
     */
    public function labels(ProductionRepository $labelRepository) : Response
    {
        $requestedProductions = $labelRepository->findAll();
        return $this->render(
            'labels.html.twig', [
                'h1' => 'Productions',
                'labels' => $requestedProductions
            ]
        );
    }
    
    /**
    * @Route("/productions/add")
    */
    public function add(Request $request,ValidatorInterface $validator):  Response
    {
        $production = new Production();

        $form = $this->createForm(ProductionType::class, $production);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            $production = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($production);
            $entityManager->flush();

            return $this->redirect('/productions');
        }
        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un label',
            'form' => $form->createView(),
        ]);
          
    }

    /**
     * @Route("/production/create", name="create_label")
     */
    public function createProduction(ValidatorInterface $validator): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduction(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $label = new Production();
        $label->setName('ProductionName');
       
        // tell Doctrine you want to (eventually) save the Production (no queries yet)
        $entityManager->persist($label);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // Basic validator errors handling
        $errors = $validator->validate($label);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }

        return new Response('Saved new label with id '.$label->getId());
    }
}
