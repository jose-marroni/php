<?php

$str = "O rato roeu a roupa do rei de Roma.";
$total = 0;

for($i = 0; $i < strlen($str); $i++) {
 
    if($str[$i] === 'a') {
       $total++;    
}
    
}

  echo "O número total de a's na frase é de: $total ". "<br>";  