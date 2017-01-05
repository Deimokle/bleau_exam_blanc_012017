<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelBundle:Default:index.html.twig');
    }

    public function dispoAction()
    {
        $nbroom = $_POST['nbChambre'];
        $em = $this->getDoctrine()->getManager();
        $hotels = $em->getRepository('TravelBundle:Hotel')->findAll();
        $rooms = $em->getRepository('TravelBundle:Room')->findBy(array('book' => 0));
        return $this->render('@Travel/hotels.html.twig', array(
            'nbChambre' => $nbroom,
            'rooms' => $rooms,
            'hotels' => $hotels,
        ));
    }

}
