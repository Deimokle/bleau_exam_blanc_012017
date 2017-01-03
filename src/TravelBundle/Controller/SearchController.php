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
use Doctrine\DBAL\Driver\PDOConnection;
use mysqli_driver;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use PDO;

class SearchController extends Controller
{

/* --------------------------- APPEL AFFICHAGE INDEX MAIS SERT A RIEN CAR DEFAULT INDEX EST UTILISE ---------------------- */
//    public function indexAction(){
//        $em = $this->getDoctrine()->getManager();
//
//        $hotel = $em->getRepository('TravelBundle:Hotel')->findAll();
//
//        return $this->render('@Travel/Default/index.html.twig', array(
//            'hotel' => $hotel,
//        ));
//    }


/* --------------------------- RECHERCHE DES HOTELS PAR ETOILES ---------------------- */
    public function starsAction(){
        $stars = $_GET['stars'];
        $bdd = new PDO('mysql:host=localhost;dbname=examblanc;charset=utf8', 'root', 'root');
        $reponse = $bdd->prepare("SELECT name FROM hotel WHERE stars = :stars");
        $reponse->execute(array(
            'stars' => $stars
        ));

        return $this->render('@Travel/Default/stars.html.twig', array(
            'hotel' => $hotel,
        ));
    }

/* --------------------------- AFFICHE UN HOTEL PAR L'ID ---------------------- */
    public function hotelAction(){

        $id = $_GET['id'];
        $bdd = new PDO('mysql:host=localhost;dbname=examblanc;charset=utf8', 'root', 'root');
        $reponse = $bdd->prepare("SELECT * 
                                  FROM hotel 
                                  WHERE id = :id");
//        $reponse = $bdd->prepare("SELECT *
//                                  FROM hotel, room
//                                  WHERE hotel.id = room.hotel_id
//                                  and id = :id");

        $reponse->execute(array(
            'id' => $id
        ));

        $donnees = $reponse->fetch();

        return $this->render('@Travel/Default/hotel.html.twig', array(
            'donnee' => $donnees,

        ));
    }
}