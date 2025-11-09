<?php

$frase ="Testando a função explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

$fraseB = "Teste, de, separação, por, vírgula";
$fraseBArray = explode(",", $fraseB);

print_r($fraseBArray);
echo "<br>";