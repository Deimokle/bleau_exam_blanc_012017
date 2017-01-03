<?php

namespace ExamBlancBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète les fonctions suivantes //
    //////////////////////////////////////

    // Exercice 1
    public function number_of_char($str)
    {
        $chaine = $str;
        // Transforme la chaine en minuscule et conserve les caractères alpha
        $chaine =$s = strtolower(preg_replace('/[^a-z]+/i', '', $chaine));

        // Compte le nb de fois que le caractère est présent dans la chaine
        $arraySortie = array();
        foreach (count_chars($chaine, 1) as $i => $val)
        {
           $arraySortie[chr($i)] = $val;
        }

        // Classe le tab $arraySortie
        $arraySortiTri = array();
        arsort($arraySortie);
        foreach ($arraySortie as $key => $val) {
            $arraySortiTri[$key] = $val;
        }

        return $arraySortiTri;

    }

    // Exercice 2
    public function panier($tab)
    {
        	$ht_5 = 0;
	$ht_20 = 0;
	$discount = 0;
	$prixAvantRemise = 0;
	$prixApresRemise = 0;
	foreach ($tab as $key => $val)
    {
	   // Gestion produit à TVA = 5,5%
	   if ($val['qty'] >= 3 and $val['qty'] < 10 and $val['code_tva'] = 1) {
	   		$prixApresRemise = (($val['qty']* $val['price_ht'])*0.95);
			$prixAvantRemise = ($val['qty']* $val['price_ht']);
	   		$ht_5 = $ht_5 + $prixApresRemise;
	   		$discount = $discount + ($prixAvantRemise - $prixApresRemise);
	   }
	   elseif ($val['qty'] >= 10 and $val['code_tva'] = 1) {
	   		$prixApresRemise = (($val['qty']* $val['price_ht'])*0.90);
			$prixAvantRemise = ($val['qty']* $val['price_ht']);
	   		$ht_5 = $ht_5 + $prixApresRemise;
	   		$discount = $discount + ($prixAvantRemise - $prixApresRemise);
	   }
	   // Gestion produit à TVA = 20%
	   elseif ($val['qty'] >= 3 and $val['qty'] < 10 and $val['code_tva'] = 2) {
	   		$prixApresRemise = (($val['qty']* $val['price_ht'])*0.95);
			$prixAvantRemise = ($val['qty']* $val['price_ht']);
	   		$ht_20 = $ht_20 + $prixApresRemise;
	   		$discount = $discount + ($prixAvantRemise - $prixApresRemise);
	   }
	   elseif ($val['qty'] >= 10 and $val['code_tva'] = 2) {
	   		$prixApresRemise = (($val['qty']* $val['price_ht'])*0.90);
			$prixAvantRemise = ($val['qty']* $val['price_ht']);
	   		$ht_20 = $ht_20 + $prixApresRemise;
	   		$discount = $discount + ($prixAvantRemise - $prixApresRemise);
	   }
	   elseif ($val['code_tva'] = 1) {
	   		$ht_5 = $ht_5 + (($val['qty']* $val['price_ht']));
	   }
	   elseif ($val['code_tva'] = 2) {
	   		$ht_20 = $ht_20 + (($val['qty']* $val['price_ht']));
	   }

	}

	$ht = $ht_5 + $ht_20;
	$tva5 = $ht_5 * 0.05;
	$tva20 = $ht_20 * 0.20;
	$ttc = $ht + $tva5 + $tva20;

	$arraySortie =
        array(
            'total_ht' => $ht,
            'total_discount' => $discount,
            'total_tva5' => $tva5,
            'total_tva20' => $tva20,
            'total_ttc' => $ttc
        );

	return $arraySortie;


    }
}