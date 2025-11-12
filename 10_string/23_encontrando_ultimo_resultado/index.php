<?php

$str = "testando encontrar palavras teste, em uma string que tem teste"; 

$palavra = strrpos($str, "teste");
echo $palavra;  

$palavra2 = strpos($str, "teste");
echo "<br>";
echo $palavra2;

if (strrpos($str, "java") === false) {
    echo "<br>A palavra java não foi encontrada";
} else {
    echo "<br>A palavra foi encontrada na posição " . strrpos($str, "java") ;
}