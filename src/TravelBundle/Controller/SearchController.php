<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 03/01/2017
 * Time: 15:10
 */

namespace TravelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TravelBundle\Entity\Hotel;
use TravelBundle\Entity\Room;

class SearchController
{

    public function indexAction{
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('TravelBundle:Hotel')->findAll();

        return $this->render('', array(
            'objets' => $objets,
        ));
    }
}