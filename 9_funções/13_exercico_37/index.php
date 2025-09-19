<?php

function sumEvenNumbers($num) {
   if (is_int($num)){
         if ($num > 0) {
              $sum = 0;
              for ($i = 1; $i <= $num; $i++) {
                if ($i % 2 == 0) {
                     $sum += $i;
                }
              }
              return "A soma dos números pares de 1 a $num é: $sum";
         } else {
              return "O número deve ser positivo.";
         }

   }else {
       $t =  "Somente número inteiro positivo.";
       return $t;
   }
}

echo sumEvenNumbers(7); 