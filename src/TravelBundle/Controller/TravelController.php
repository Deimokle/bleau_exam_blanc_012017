<?php

namespace TravelBundle\Controller;

use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TravelController extends Controller
{
    public function travelAction(Request $request, $nbCustomers, $city, $stars)
    {
		$em = $this->getDoctrine()->getManager();
		$connection = $em->getConnection();
		$rsm = new ResultSetMappingBuilder($em);
		$sqlRequest = "SELECT * FROM hotel WHERE capacity >= :nbCustomers";
		if ($city != null)
			$sqlRequest .= " AND city = :city";
		if ($stars != null)
			$sqlRequest .= " AND stars >= :stars";
		$statement = $connection->prepare($sqlRequest);
		$statement->bindValue('nbCustomers', $nbCustomers);
		if ($city != null)
			$statement->bindValue('city', $city);
		if ($stars != null)
			$statement->bindValue('stars', $stars);
		$statement->execute();
		$destinations = $statement->fetchAll();
		echo "nbCustomers", $nbCustomers, " city", $city, " stars", $stars, "\n";
        return $this->render('TravelBundle::travels.html.twig', [
        	'destinations' => $destinations
		]);
    }
}
