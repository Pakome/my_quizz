<?php

namespace QuizzBundle\Controller;

use QuizzBundle\Entity\Question;
use QuizzBundle\QuizzBundle;
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
     * @Route("/quizz/{id_categorie}")
     */
    public function showQuizz($id_categorie)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $quizz=$entityManager->getRepository('QuizzBundle:Categorie')->find($id_categorie);
        $questions=$entityManager->getRepository('QuizzBundle:Question')->findBy(
            array('idCategorie' => $quizz->getId()));
        foreach($questions as &$test) {
            $test->reponses = $entityManager->getRepository('QuizzBundle:Reponse')->findBy(
                array('idQuestion' => $test->getId()));
        }

    /*     dump($quizz);
        dump($questions);
       die();
    */

        return $this->render('@Quizz/quizz.html.twig', array(
            "quizz" => $quizz,
            "questions" => $questions,
        ));
    }
}
