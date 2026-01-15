<?php
// return with paramaters
function myfunc($text){
    echo $text. '<br>';
}
myfunc("Wassup return with parameters");

//non return with paramaters
function myfunc1($text){
    echo $text. '<br>';
}
myfunc1("Wassup non return with parameters");

// return without paramaters
function sum(){
    $a = 10;
    $b = 20;
    $c = $a + $b;
    return $c;
}
echo sum();

//return with parameters
function sum1($a, $b){
    $c = $a + $b;
    return $c;
}
echo '<br>'.sum1(30, 40);
?>