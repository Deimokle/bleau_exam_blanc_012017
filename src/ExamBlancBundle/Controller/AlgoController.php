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


    }
}