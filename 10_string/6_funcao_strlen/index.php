<?php

$str1 = "Essa estring é muito grande ";
$str2 = "Essa não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2) {
    echo "A primeira string é maior que a segunda <br>";
} elseif($len1 < $len2) {
    echo "A segunda string é maior que a primeira <br>";
} else {
    echo "As duas strings têm o mesmo tamanho <br>";
}