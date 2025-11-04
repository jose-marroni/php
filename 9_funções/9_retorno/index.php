<?php

function soma($a, $b) {
    return $a + $b;
}

echo "A soma de 10 e 20 é: " . soma(10, 20) . "<br>";

$x = soma(5, 15);
echo  $x . "<br>";

$y = soma($x, 19);

echo  $y . "<br>";

function testeRetorno() {
    return "Teste de retorno";
}

$z = testeRetorno();
echo $z . "<br>";