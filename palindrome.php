<?php
//create fn for palindrome
function is_palindrome($word) {
	
	// replace empty spaces with ''
	$word = str_replace(' ', '', $word);
		echo $word . PHP_EOL;
	// remove special characters with ''
	$word = preg_replace('/[^A-Za-z0-9\-]/', '', $word);
		echo $word . PHP_EOL;
	// make all cases lowercase
	$word = strtolower($word);
		echo $word . PHP_EOL;
	// reverse the word and compare with original	
	$reverse = strrev($word);
		echo $reverse . PHP_EOL;
		if ($word == $reverse) {
			echo "This is a palindrome!\n";
		} else {
			echo "This is not a palindrome!\n";
		}
}

$word = 'Amore, Roma';
is_palindrome($word);
// var_dump($word);