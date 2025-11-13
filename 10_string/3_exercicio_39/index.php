<?php

$arr = [
    'porta'=> 100,
    'macaneta'=> 5,
    'motor'=> 2000,
    'pneu'=> 300,
];

function itensCaros($arr){
    $arrItensCaros = [];

    foreach ($arr as $item => $valor) {
        if ($valor > 10) {
           array_push($arrItensCaros, $item);  
        }
    }

    return $arrItensCaros;
}

$novoarr = itensCaros($arr);  

print_r($novoarr);
?>