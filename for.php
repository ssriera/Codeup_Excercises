<?php

fwrite(STDOUT, 'Please enter a starting number:');
$starting = trim(fgets(STDIN));

fwrite(STDOUT, 'Please enter a ending number:');
$ending = trim(fgets(STDIN));

fwrite(STDOUT, 'Please enter an increment value:');
$increm = trim(fgets(STDIN));


for ($i = $starting; $i <= $ending ; $i += $increm) { 
	
	echo "\$i has a value of {$i}\n";
}
?>