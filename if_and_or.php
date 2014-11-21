<?php

$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z}\n";
}

if ($x > 0 || $x < 10) {
	echo "$x is greater than 0 OR less than 10\n";
}

if ($y > 0 || $y < 10) {
	echo "$y is greater than 0 OR less than 10\n";
}

if ($z > 0 || $z < 10) {
	echo "$z is greater than 0 OR less than 10\n";
}

if ($x > 0 && $x < 10) {
	echo "$x is greater than 0 AND less than 10\n";
}

if ($y > 0 && $y < 10) {
	echo "$y is greater than 0 AND less than 10\n";
}

if ($z > 0 && $z < 10) {
	echo "$z is greater than 0 AND less than 10\n";
}
?>

 <?php
 $a = 5;
 $b = 10;
 $c = '10';

 // Shorten the next 2 statements into an if/else
if ($a < $b) {
    echo "$a is less than $b";
} else {
    echo "$a is greater than $b";
		}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
    echo "$b is greater than or equal to $c\n";
} else {
    echo "$b is less than or equal to $c\n";
		}

// combine the next 4 conditionals into
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal

if ($b === $c) {
    echo "$b is identical to $c";
} elseif ($b == $c) {
    echo "$b is equal to $c";
} elseif ($b !== $c) {
    echo "$b is not identical to $c";
} elseif ($b != $c) {
    echo "$b is not equal to $c";
}

?>