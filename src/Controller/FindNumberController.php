<?php

namespace App\Controller;

use App\Entity\FindNumber;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\Type\FindNumberType;
use Symfony\Component\Routing\Annotation\Route;

class FindNumberController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $entity = new FindNumber();
        $entity->setTheNumber(0);
        $result = '';

        $form = $this->createForm(FindNumberType::class, $entity);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entity = $form->getData();
            $sentNumberByUser = $entity->getTheNumber();


        }

        return $this->renderForm('task/new.html.twig', [
            'form' => $form,
            'result' => $result
        ]);
    }
}
