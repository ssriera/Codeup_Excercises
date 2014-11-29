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


<?php

fwrite(STDOUT, 'WHAT IS THE HIGH NUMBER? ');

$high = trim(fgets(STDIN)); 

fwrite(STDOUT, 'WHAT IS THE LOW NUMBER?');

$low = trim(fgets(STDIN)); 

fwrite(STDOUT, 'What is the increment?');

$increment = trim(fgets(STDIN)); 
$increment = (empty($imcrement) ? 1 : $increment;)

for($i = $low; $i < $high; $i+= $increment) {
	echo $i . PHP_EOL;
}

echo 'this is test:';
$tests = fgets(STDIN);
var_dump($test);
exit();
