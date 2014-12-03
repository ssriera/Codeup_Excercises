<?php 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famousFakePhysicists = explode(', ', $physicistsString);

sort($famousFakePhysicists);

function humanizedList($famousFakePhysicists, $alpha = false) {

	print_r($famousFakePhysicists);

	if ($alpha == true) {
		sort($famousFakePhysicists);
		}

	$stark = array_pop($famousFakePhysicists);

	$NewPstring = implode(', ', $famousFakePhysicists);

	echo "Some of the most famous fictional theoretical physicists are {$NewPstring}, and {$stark}." . PHP_EOL;
}

humanizedList($famousFakePhysicists, true);


?>