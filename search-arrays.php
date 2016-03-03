<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($value, $array) {
	$result = array_search($value, $array);
	if ($result !== false) {
		return true;
	} else {
		return false;
	}
}

echo isInArray('Tina', $names) . PHP_EOL;

function compareArrays($firstArray, $secondArray) {
	$matches = 0;
	foreach($firstArray as $key => $value) {
		$result = array_search($value, $secondArray);
		if ($result !== false) {
			$matches++;
		}
	}
	return "Number of matches is " . $matches . PHP_EOL;
}

echo compareArrays($names, $compare);