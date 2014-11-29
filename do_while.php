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

<?php
$a = 1;
do {
	echo `this message will self destruct`;
} while ($a = 1);

usleep (2000);
echo `say 3`;
usleep (2000);
echo `say 2`;
usleep (2000);
echo `say 1`;

?>