<?php

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    
    foreach (str_split(strtolower($string)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    
    return $count;
}

echo countVowels("banana nanica"); 