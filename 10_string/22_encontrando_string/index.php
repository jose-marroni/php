<?php

$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testandoEncontrar = strpos($str, "strpos");

echo "$testandoEncontrar <br>";

$testandoEncontrar2 = strpos($str, "java");     

echo "$testandoEncontrar2 <br>"; 

if ($testandoEncontrar2 === false) {
    echo "A string não foi encontrada <br>";
} else {
    echo "A string foi encontrada <br>";
}

$palavra = "com";

$testandoEncontrar3 = strpos($str, $palavra);   

echo "$testandoEncontrar3 <br>";