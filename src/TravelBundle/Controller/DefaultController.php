<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelBundle:Default:index.html.twig');
    }

    public function resultAction()
    {

        $em = $this->getDoctrine()->getManager();

        $RAW_QUERY = 'select hotel.*, count(room.id) from room, hotel where room.hotel_id = hotel.id and room.book = 0 group by hotel_id LIMIT 15
';

        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();

        $result = $statement->fetchAll();

//        var_dump($result);

        return $this->render('@Travel/Default/result.html.twig', array('hotels'=>$result));
    }
}
