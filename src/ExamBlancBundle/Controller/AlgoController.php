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
        $spechar = str_replace(".", "-", $str);
        $phrase = preg_replace('/([^.a-z0-9]+)/i',"",$spechar);
        $phrase2 = str_split(strtolower($phrase));
        $result = array_count_values($phrase2);
        asort($result);
        return($result);
    }

    // Exercice 2
    public function panier($tab)
    {


    }
}



