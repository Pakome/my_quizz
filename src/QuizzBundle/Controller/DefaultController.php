<?php

namespace QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('QuizzBundle:Categorie')->findAll();

        return $this->render('@Quizz/index.html.twig', array(
            "categorie" => $categories
        ));

    }

    /**
     * @Route("/quizz/{id}")
     */
    public function showQuizz($id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $quizz=$entityManager->getRepository('QuizzBundle:Categorie')->find($id);

        dump($quizz);
        dump($quizz->getQuestion());
        die();

        return $this->render('@Quizz/quizz.html.twig', array(
            "quizz" => $quizz,

        ));

    }
}
