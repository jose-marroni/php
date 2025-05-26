<?php

$x = 10;
$y =& $x;
echo $x;
echo "<br>";
echo $y;
echo"<br>";

$y = 15;

echo "Atribuição apos ref";
echo"<br>";
echo $x;
echo "<br>";
echo $y;

$x = 20;

echo"<br>";
echo "Atribuição apos ref";
echo"<br>";
echo $x;
echo "<br>";
echo $y;

$nome = "matheus";

$nome2 =& $nome;

echo"<br>";
echo $nome;
echo"<br>";
echo $nome2;
echo "<br>";

$nome2 = "joão";

echo"<br>";
echo $nome;
echo"<br>";
echo $nome2;
echo "<br>";
