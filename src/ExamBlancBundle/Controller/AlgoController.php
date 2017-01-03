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
        
        // on converi tout en minuscule
        $strl = strtolower($str);
        
                
        // conversion en tableau
        $arr1 = str_split($strl);
       
         
//        comptage de chaque caractère
        $arr2 = array();
        foreach ($arr1 as $value) {
            if(array_key_exists($value, $arr2) == false) {
                $arr2[$value] = 1; 
            } else {
                $arr2[$value]++;
            }            
        }
        
//        conservation des car alpha numériques
        $arrAlnum = array();
        foreach ($arr2 as $key => $val) {
            if (ctype_alnum($key)) {
                $arrAlnum[$key] = $val;
            }
        }
        
               
        // tri par quantité
        $arr2Object = new \ArrayObject($arrAlnum);        
        $arr2Object->asort();
      
        $arr3 = array();
        foreach ($arr2Object as $key => $val) {
             if(array_key_exists($key, $arr3) == false) {
                 $arr3[$key] = $val;
             }
        }
        
        return $arr3;
    }

    // Exercice 2
    public function panier($tab)
            
            
    {


    }
}