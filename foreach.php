<?php

// $numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];

// for ($i = 0; $i < count($numbers); $i++) {
//     echo ("\$numbers has an element with a value of {$numbers[$i]}\n");
// }
// This does the same thing as below:

// foreach ($numbers as $value) {
// 	echo "\$numbers has an element with a value of {$value}\n";
// }
?>

<?php

// $data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
// foreach ($data as $datum) {
//     if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
//     } else if (is_string($datum)) {
//         echo "{$datum} is a string\n";
//         exit();
//     }
// }
?>

<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//what is the data type?
foreach ($things as $value) {
		echo gettype($value) . PHP_EOL;
}
	
//which are scalar?
foreach ($things as $value) {
	if (is_scalar($value))
		echo $value . PHP_EOL;
}

//echo each 
foreach ($things as $thing) {
	echo $thing . PHP_EOL;

	if (is_array($thing)) {
		
		foreach ($thing as $value) {
			echo $value . PHP_EOL;
		}
	}
}