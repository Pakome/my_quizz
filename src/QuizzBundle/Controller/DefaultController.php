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
        $categories = $em->getRepository('QuizzBundle:Categorie')
            ->findAll();

        return $this->render('@Quizz/Default/index.html.twig', array(
            "categorie" => $categories
        ));

    }
}
