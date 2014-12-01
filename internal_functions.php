<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function checkvariable($variable) {
	unset($variable);
	if (empty($variable)) {
		return 'EMPTY';
	} elseif (isset($variable)) {
		return 'SET';	
	} else {
		//
	}
}
	
echo "\$nothing is " . checkvariable($nothing) . PHP_EOL;
echo "\$something is " . checkvariable($nothing) . PHP_EOL;


// Serialize the array $array, and output the results
serialize($array);
	var_dump($array);

// Unserialize the array $array, and output the results
unserialize($array);
	var_dump($array);

isset($something);


// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

?>