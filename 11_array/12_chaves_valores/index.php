<?php

$carro =[
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2020,
    "cor" => "Prata"
];

$chaves = array_keys($carro);
print_r($chaves);
echo "<br>";

$valores = array_values($carro);
print_r($valores);
echo "<br>";
