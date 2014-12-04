<?php

 // first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$needle = 'Tina';


function findname($result) {
 	if ($result == 'Tina') {
 		return 'TRUE';
 		echo "You found: {haystack[$result]}" . PHP_EOL;
 	} else {
 		return 'FALSE';
 	}
 }

echo findname($needle, $names) . PHP_EOL;

$count = 0;

function compareArrays($names, $compare) {
	foreach ($names as $value) {
		if (array_search($value, $compare) !== false) {
			$count++;
		}
	return 'TRUE';
	}
}

echo compareArrays($names, $compare) . PHP_EOL;

$result = array_search($needle, $names);

// foreach ($variable as $key => $value) {
// 	# code...
// }