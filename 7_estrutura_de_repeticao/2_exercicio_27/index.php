<?php

$arr = [5, "a", true, false, "opa", 12.8, "teste", true, [], "palavras", 5, 10 , "alo"];

$x = count($arr);
$y = 0;
while($y < $x){

    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }
    $y++;

}