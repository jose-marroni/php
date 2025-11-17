<?php

$str = "Essa string é muito grande, ela tem muitos caracteres dentro dela.";

for($i = 0; $i <strlen($str); $i++) {
    echo $str[$i] . "<br>";
    
}