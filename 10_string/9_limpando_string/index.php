<?php

$str1 = "   Matheus     ";

echo "Original: '$str1'<br>";


$str1Limpa = trim($str1);
echo "Esta é a string 1: '$str1Limpa'<br>";

$str1Limpa2 = rtrim($str1);
echo "Esta é a string 1 com rtrim: '$str1Limpa2'<br>";

$str1Limpa3 = ltrim($str1);
echo "Esta é a string 1 com ltrim: '$str1Limpa3'<br>";