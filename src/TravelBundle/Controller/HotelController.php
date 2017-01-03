<?php

namespace TravelBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TravelBundle\Entity\Hotel;

/**
 * Hotel controller.
 *
 */
class HotelController extends Controller
{
    /**
     * Lists all Hotel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $hotels = $em->getRepository('TravelBundle:Hotel')->findAll();

        return $this->render('@Travel/hotel/index.html.twig', array(
            'hotels' => $hotels,
        ));
    }

    /**
     * Finds and displays a Hotel entity.
     *
     */
    public function showAction(Hotel $hotel)
    {

        return $this->render('@Travel/hotel/show.html.twig', array(
            'hotel' => $hotel,
        ));
    }
}
