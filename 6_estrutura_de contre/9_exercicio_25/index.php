<?php

$a = 15;
$c = 90;
$b = "test";

if(is_int($a)){
    $mult = $a * 2;

    if($mult >100){
        echo "Número maior que 100 <br>";
    }else{
        echo "Número menor que 100 <br> ";
    }
}else {
    echo "não é um número";
}

if(is_int($c)){
    $multi = $c * 2;

    if($multi >100){
        echo "Número maior que 100 <br>";
    }else{
        echo "Número menor que 100 <br> ";
    }
}else {
    echo "não é um número";
}

if(is_int($b)){
    $mult = $b * 2;

    if($mult >100){
        echo "Número maior que 100 <br>";
    }else{
        echo "Número menor que 100 <br> ";
    }
}else {
    echo "não é um número";
}