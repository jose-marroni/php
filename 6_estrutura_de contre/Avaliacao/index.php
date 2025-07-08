<?php

function compararNumeros($a , $b){

    if($a > $b){
    
         return "O primeiro número é maior.";
    
    }else  if($a < $b){

        return "O segundo número é maior.";

    }else if ($a == $b){

        return "Os números são iguais.";

    }

}

compararNumeros(12 , 15);
compararNumeros (40 , 20);
compararNumeros (11 , 11);