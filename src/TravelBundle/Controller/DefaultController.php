<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelBundle:Default:index.html.twig');
    }

    public function hotelsAction()
    {
        return $this->render('TravelBundle:Default:hotels.html.twig');
    }
}
