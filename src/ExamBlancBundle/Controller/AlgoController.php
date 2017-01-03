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
        $tableau = strtolower($str);
        $tab = str_split($tableau);
        $tabletters = [];
        foreach ($tab as $char) {
            if (ctype_alnum($char) === true) {
                $tabletters[] = $char;
            }
        }
        sort($tabletters);
        $result = array_count_values($tabletters);
        return $result;

//        $tableau=str_split(strtolower($str));
//
//        $lettre=ctype_alpha($tableau);
//            echo $lettre;


    }

//     Exercice 2
    public function panier($tab)
    {


    }
}