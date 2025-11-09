<?php

$veiculo = "carro - navio - helicóptero - barco - jangada ";
$veiculoArray = explode(" - ", $veiculo);
print_r($veiculoArray);
echo "<br>";

for ($i = 0; $i < count($veiculoArray); $i++) {
    echo "Veículo: " . $veiculoArray[$i] . "<br>";
}