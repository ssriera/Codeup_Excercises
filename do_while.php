<?php

$a = 0;
do {
	echo $a . "\n";
	$a += 2;
} while ($a <= 100);
?>

<?php

$a = 100;
do {
	echo $a . "\n";
	$a -= 5;
} while ($a >= -10);
?>

<?php

$a = 2;
do {
	echo $a . "\n";
	$a = $a * $a;
} while ($a <= 1000000);
?>