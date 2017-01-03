<?php

namespace ExamBlancBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète les fonctions suivantes //
    //////////////////////////////////////

    // Exercice 1

    public function number_of_char($phrase)
    {
        $phrase = "Seul, on va plus vite, ensemble, on va plus loin";

        $clear = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($phrase))))));


        $newstr = str_split($phrase);

        echo $newstr;

        foreach ($newstr as $value) {

            $value = asort($newstr);
//        for ($i = 0; $i < count($newstr); $i++) {
//            $trie[] = arsort($newstr, SORT_NUMERIC);

        }


        return $value;
    }

        // Exercice 2



    public function panier($tab)
    {


    }
}