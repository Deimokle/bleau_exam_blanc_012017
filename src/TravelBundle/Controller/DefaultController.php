<?php

namespace TravelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $db=$this->get('doctrine.dbal.default_connection');//on récupére un objet Doctrine\DBAL\Connection
        $rooms=$db->fetchAll('SELECT * FROM room');


//        Exemple de requete :
//        SELECT * FROM `room` JOIN hotel ON hotel_id = hotel.id
//
//         SELECT * FROM `room` JOIN hotel ON hotel_id = hotel.id where book = 1
//
//          select hotel_id, count(id) from room WHERE book = 1 group by hotel_id
//
//          select hotel.name, count(room.id) from room, hotel where room.hotel_id = hotel.id group by hotel_id
//
//          select hotel.name, count(room.id) from room, hotel where room.hotel_id = hotel.id and room.book = 0 group by hotel_id
//        select hotel.*, count(room.id) from room, hotel where room.hotel_id = hotel.id and room.book = 0 group by hotel_id

        return $this->render('@Travel/Default/index.html.twig',array('rooms'=>$rooms));
    }
}


