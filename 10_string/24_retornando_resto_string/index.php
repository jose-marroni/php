<?php

$str = "Testando o resto da string, pra ver se da certo";

$rest = strstr($str, "resto");

echo "$rest <br>";

$s ="string";

$rest2 = strstr($str, $s);
echo "$rest2 <br>";

if(strstr($str, ".net") === false){
    echo "Não achei";
}