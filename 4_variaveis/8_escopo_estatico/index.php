<?php

function test(){
    $a = 0;
    $a++;
    echo"$a <br>";
}

test();
test();
test();

function testStatic(){
   static $a = 0;
    $a++;
    echo"$a <br>";
}

testStatic();
testStatic();
testStatic();