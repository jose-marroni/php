<?php

function parOuImpar($numero){
    if($numero % 2 == 0){
        echo "O número $numero é par <br>";
    } else {
        echo "O número $numero é ímpar <br>";
    }
}

parOuImpar(4);
parOuImpar(7);