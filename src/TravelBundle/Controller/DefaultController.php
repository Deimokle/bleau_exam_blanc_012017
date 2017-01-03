<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelBundle:Default:index.html.twig');
    }

//    public function reserveAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $RAW_QUERY = 'SELECT * FROM hotel';
//
//        $statement = $em->getConnection()->prepare($RAW_QUERY);
//        $statement->execute();
//
//        $result = $statement->fetchAll();
//    }
}


