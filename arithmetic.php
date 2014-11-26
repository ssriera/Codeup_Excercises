<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}
function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}
function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}
function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}
function modulus($a, $b) {
	echo $a % $b . PHP_EOL;
}

add (1, 20);
subtract (1, 20);
multiply (2, 20);
divide (20, 2);
modulus (20, 2);

?>