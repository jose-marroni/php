<?php
$arr = [
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "Rio de Janeiro"
];

if (array_key_exists("nome", $arr)) {
    echo "A chave 'nome' existe no array.";
} else {
    echo "A chave 'nome' não existe no array.";
}
echo "<br>";

if (array_key_exists("profissao", $arr)) {
    echo "A chave 'profissao' existe no array.";
} else {
    echo "A chave 'profissao' não existe no array.";
}

if(isset($arr["idade"])) {
    echo "<br>A chave 'idade' existe no array.";
} else {
    echo "<br>A chave 'idade' não existe no array.";
}

if(isset($x)){
    echo "<br>A variável 'x' está definida.";
} else {
    echo "<br>A variável 'x' não está definida.";
}

$y = 10;
if(isset($y)){
    echo "<br>A variável 'y' está definida.";
} else {
    echo "<br>A variável 'y' não está definida.";
}