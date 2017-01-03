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

        $nbchb = $_POST['nbchambre'];
        $nbpers = $_POST['nbPers'];

        $resa = $nbchb * $nbpers;
//        var_dump($nbchb);
//        var_dump($nbpers);
//        var_dump($resa);

        $RAW_QUERY = 'select hotel.*, count(room.id) AS total from room, hotel where room.hotel_id = hotel.id and room.book = 0 and hotel.capacity >= '. $resa .' group by hotel_id
';

        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();

        $result = $statement->fetchAll();




        return $this->render('@Travel/Default/result.html.twig', array('hotels'=>$result));
    }
}
