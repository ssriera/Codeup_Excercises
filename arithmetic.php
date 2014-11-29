<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b . PHP_EOL;
	} else {
		return error($a, $b);
	}
}
function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b . PHP_EOL;
    } else {
		return error($a, $b);
	}
}
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b . PHP_EOL;
    } else {
    	return error($a, $b);
    }
}
function divide($a, $b) {
	if ($a == 0 || $b == 0) {
    	return false;
	} elseif (is_numeric($a) && is_numeric($b)) {
    	return $a / $b . PHP_EOL;
    } else {
    	return error($a, $b);
    }
}
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b . PHP_EOL;
	} else {
		return error($a, $b);
	}
}
function error($a, $b) {
	return "ERROR: inputs \$a is $a and \$b is $b must be numbers\n";
}

$result = add (1, 20);
$result = subtract (1, 20);
// $result = multiply (2, p);
$result = divide (20, 2);
// $result = modulus (20, ji);

var_dump($result);

?>