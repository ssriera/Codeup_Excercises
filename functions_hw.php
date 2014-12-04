<?php

/*  We have some functions pre-defined for us, but they aren't working...
    Can you figure out why?  Fix those functions and get this code to work!
    Each function should accept some input and return some data.
    Each function has one common mistake, preventing it from working.

*/

$number1 = 10;
$number2 = 7;

$string1 = 'benjamin';
$string2 = 'franklin';

$array1 = ['banana', 'orange', 'mango', 'kiwi'];
$array2 = ['widget', 'wodget', 'wadget', 'wocket'];

/* -------------------------------- */

// This function accepts a number, and returns it's value squared.
function squareThis($numSquared) {
    
    $numSquared = ($number * $number);
    return $numSquared;
}

echo squareThis($number1) . PHP_EOL;

/* -------------------------------- */

// This function accepts a string, and returns that string with an uppercase first letter.
function upperCaseFirst($string) {

    $string = ucfirst($string);
    $upperS = $string;
    return $upperS;
}

echo upperCaseFirst($string1) . ' ' . upperCaseFirst($string2) . PHP_EOL;

/* -------------------------------- */

/* -------------------------------- */

// This function accepts a string and returns an array of letters.
function createArrayOfLetters($string) {
    $array = str_split($string);
    return $array;
}

print_r(createArrayOfLetters($string1));

/* -------------------------------- */

/* -------------------------------- */

// This function accepts two arrays, and returns one merged array.
function mergeTheseArrays($first_array, $second_array) {

    $mergedArray = array_merge($first_array, $second_array);
    return $mergedArray;
}

$first_array = $array1;
$second_array = $array2;
print_r(mergeTheseArrays($first_array, $second_array));

/* -------------------------------- */