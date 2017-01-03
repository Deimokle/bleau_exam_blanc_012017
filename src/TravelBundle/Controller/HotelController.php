<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 03/01/17
 * Time: 16:10
 */

namespace TravelBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class HotelController extends Controller
{
    /**
     * Lists all user entities.
     *
     */

    public function indexAction(){
//        $hotelEm = $this->get('doctrine')->getEntityManager('hotel');


        // Appel à la base de donnée
        //getDoctrine appel la methode Doctrine
        //getManager appel des ORM

//        $em = $this->getDoctrine()->getManager();
//
//        // Appel à l'entity
//        $hotel = $em->getRepository('Hotel')->findAll();

//        // Retour à la page concernée avec une valeur appelée
//        return $this->render('@Travel/Default/index.html.twig', array(
//            'hotels'=>$hotel,
//        ));

        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}