<?php

namespace TravelBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TravelBundle\Entity\Chambre;

/**
 * Chambre controller.
 *
 */
class ChambreController extends Controller
{
    /**
     * Lists all Chambre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chambres = $em->getRepository('TravelBundle:Chambre')->findAll();

        return $this->render('chambre/index.html.twig', array(
            'chambres' => $chambres,
        ));
    }

    /**
     * Finds and displays a Chambre entity.
     *
     */
    public function showAction(Chambre $chambre)
    {

        return $this->render('chambre/show.html.twig', array(
            'chambre' => $chambre,
        ));
    }
}
