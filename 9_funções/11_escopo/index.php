<?php

$a = 10;

$b = 20;

function testeEscopo() {
    $a = 5;

    global $b;

    $a++;

    $b++;

    static $c = 0;
    $c++;   

    echo "Dentro da função: $a <br>";

    echo "Escopo global da variavel b dentro da função: $b <br>";
    echo "Variavel estática c dentro da função: $c <br>";   
}   

echo "Fora da função: $a <br>";
echo "Escopo global da variavel b fora da função: $b <br>";
testeEscopo();

echo "Escopo global de b 2: $b <br>";

testeEscopo();