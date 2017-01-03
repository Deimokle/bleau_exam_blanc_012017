<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowController extends Controller{

    public function resultAction(){

        $em = $this->getDoctrine()->getManager();
        $hotels = $em->getRepository('TravelBundle:Hotel')->findAll();

        return $this->render('@Travel/Default/hotels.html.twig', array(
            'hotels' => $hotels,
            'demande' => $_POST['demande'],
        ));
    }
}