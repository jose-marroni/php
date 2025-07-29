<?php

$x = 4;

while($x <=30){
    
    echo  $x . " Contagem de numeros<br>";
    if($x === 24){
        echo "interrompido no numero 24 <br>";
        break;
    }
    
    $x += 2;
}