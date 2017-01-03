<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('TravelBundle:Hotel')->findAll();

        return $this->render('@Travel/Default/index.html.twig', array(
            'hotel' => $hotel,
        ));
//        return $this->render('TravelBundle:Default:index.html.twig');
    }
}
