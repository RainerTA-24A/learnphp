<?php

function hello() {
    var_dump('Hello');
}

hello();

function helloName($name='Nameless', $age='unknown') {
    var_dump("Hello, $name! You are $age years old!");
}


helloname();
function square(int $a): int {
    if($a < 0) {
        return 0;
    } 
    return $a * $a;
}

$answer = square(2);
var_dump($answer);

function recursion($i) {
    if($i < 10){
        var_dump($i);
        recursion($i+1);
    }
}


recursion(0);