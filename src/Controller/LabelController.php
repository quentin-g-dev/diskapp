<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\LabelRepository;

use App\Entity\Label;

use App\Form\LabelType;


class LabelController extends AbstractController
{
   /**
     * @Route("/labels")
     */
    public function labels(LabelRepository $labelRepository) : Response
    {
        $requestedLabels = $labelRepository->findAll();
        return $this->render(
            'labels.html.twig', [
                'h1' => 'Labels',
                'labels' => $requestedLabels
            ]
        );
    }
    
    /**
    * @Route("/labels/add")
    */
    public function add():  Response
    {
        $label = new Label();

        $form = $this->createForm(LabelType::class, $label);

        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un label',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/label/create", name="create_label")
     */
    public function createLabel(ValidatorInterface $validator): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createLabel(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $label = new Label();
        $label->setName('LabelName');
       
        // tell Doctrine you want to (eventually) save the Label (no queries yet)
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
