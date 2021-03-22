<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;

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
    public function add():  Response
    {
        $style = new Style();

        $form = $this->createForm(StyleType::class, $style);

        return $this->render('form.html.twig', [
            'h1'=>'Ajouter un genre',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/style/create", name="create_style")
     */
    public function createStyle(ValidatorInterface $validator): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createStyle(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $style = new Style();
        $style->setName('StyleName');
       
        // tell Doctrine you want to (eventually) save the Style (no queries yet)
        $entityManager->persist($style);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // Basic validator errors handling
        $errors = $validator->validate($style);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }

        return new Response('Saved new style with id '.$style->getId());
    }
}
