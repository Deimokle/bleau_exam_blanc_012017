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
        $point = str_replace(".", "-", $str);
        $tab = preg_replace('/([^.a-z0-9]+)/i',"",$point);

        $tab2 = str_split(strtolower($tab));

        $result = array_count_values($tab2);

        return($result);
    }

    // Exercice 2
    public function panier($tab)
    {


        $ht = 0;

        foreach ($tab as $key => $value)
        {
            if ($value['qty']>=3) {
                $ht = ($ht + (($value['price_ht'] * $value['qty']) * 0.95));
            }
            elseif ($value['qty']>=10) {
                $ht = ($ht + (($value['price_ht'] * $value['qty']) * 0.90));
            }
            else {
                $ht = ($ht + $value['price_ht'] * $value['qty']);
            }
                print_r($ht);
        }

    }
}