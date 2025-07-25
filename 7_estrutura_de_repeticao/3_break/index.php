<?php

$y =0;

while($y <= 10){
    echo $y . "<br>";
    
    if($y ===5){
        echo "terminando o loop <br>";
        break;
    }
    
    $y++;
}

echo "Saiu do loop <br>";