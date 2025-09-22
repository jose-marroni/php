<?php

function test($a = 'test'){
    echo "O valor de A é: $a <br>";
}

test();
test('teste 2');

function testando($b, $a = 'x'){
    echo "O valor de A é: $a e de b é: $b  <br>";
    
}

testando('1');
testando('2', ' 3');