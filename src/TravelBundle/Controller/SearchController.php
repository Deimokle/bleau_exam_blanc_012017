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


    public function indexAction(){
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('TravelBundle:Hotel')->findAll();

        return $this->render('@Travel/Default/index.html.twig', array(
            'hotel' => $hotel,
        ));
    }

    public function starsAction($stars){
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('TravelBundle:Hotel')->findOneBy($stars);

        return $this->render('@Travel/Default/stars.html.twig', array(
            'hotel' => $hotel,
        ));
    }

    public function hotelAction(){

        $id = $_GET['id'];
        $bdd = new PDO('mysql:host=localhost;dbname=examblanc;charset=utf8', 'root', 'root');
        $reponse = $bdd->prepare("SELECT * FROM hotel WHERE id = $id");
        $reponse->execute(array("$_GET[$id]"));

        $donnees = $reponse->fetch();

        return $this->render('@Travel/Default/hotel.html.twig', array(
            'donnee' => $donnees,

        ));
    }
}