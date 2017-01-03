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
    	$tab = [];
		foreach (str_split(strtolower($str)) as $char) {
			if (preg_match('/[a-z]/', $char)) {
				if(array_key_exists($char, $tab))
					++$tab[$char];
				else
					$tab[$char] = 1;
			}
		}
		return $tab;
    }

    // Exercice 2
    public function panier($tab)
    {
		$VAT = [1 => 1 / 20, 2 => 1 / 5];
		$price = [
			"total_ht" => 0,
			"total_discount" => 0,
			"total_tva5" => 0,
			"total_tva20" => 0,
			"total_ttc" => 0
		];
		foreach ($tab as $item) {
			$discountPerItem = $item['qty'] < 3 ? 0 :  $item['price_ht'] * ($item['qty'] < 10 ? 5.0 / 100 : 10.0 / 100);
			$priceAfterDiscount = ($item['price_ht'] - $discountPerItem) * $item['qty'];
			$price['total_discount'] += $discountPerItem * $item['qty'];
			$price['total_ht'] += $priceAfterDiscount;
			$vat = $priceAfterDiscount * $VAT[$item['code_tva']];
			$vatIndex = "total_tva" . ($item['code_tva'] == 1 ? "5" : "20");
			$price[$vatIndex] += $vat;
			$price['total_ttc'] += $priceAfterDiscount + $vat;
		}
		foreach ($price as $key => $value) {
			$price[$key] = round($value, 2);
		}
		var_dump($price);
		return $price;

    }
}