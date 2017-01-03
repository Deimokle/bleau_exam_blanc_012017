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
        $phrase = strtolower($phrase);
        $str[] =  str_split($phrase);
        $lettres[] =  str_split($phrase);
        foreach($str as $key => $value){
            if (ctype_alnum($str) == 1) {
                $str[] = array_count_values($value) ;

            }
        }
        return arsort($str);
    }

    // Exercice 2
    public function panier($tab)
    {


    }
}