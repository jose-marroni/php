<?php

$frase = "testando o case de uma palavra. <br>";
$frase2 = "Testando o case de uma palavra. <br>";
$frase3 = "testando o case de uma palavra. <br>";

//primeiro letra em maiúsculo
echo ucfirst($frase);   
echo ucfirst($frase2);

//todas as palavras com a primeira letra em maiúsculo
echo ucwords($frase3);
echo ucfirst($frase2);
