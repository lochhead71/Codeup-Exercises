<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$moreNames = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'John'];

$evenMoreNames = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Joey', 'Sam', 'Pete'];

function combineArrays($firstArray, $secondArray) {
	$mergedArrays = [];
	if (count($firstArray) >= count($secondArray)) {
		$longerArray = $firstArray;
		$shorterArray = $secondArray;
	} else {
		$longerArray = $secondArray;
		$shorterArray = $firstArray;
	}
	foreach($longerArray as $key => $name) {
		if (array_key_exists($key, $shorterArray) && $longerArray[$key] == $shorterArray[$key]) {
			$mergedArrays[] = $longerArray[$key];
		} else {
			$mergedArrays[] = $longerArray[$key];
			if  (array_key_exists($key, $shorterArray)) {
				$mergedArrays[] = $shorterArray[$key];
			}
		}
	}
	return $mergedArrays;
}

print_r(combineArrays($names, $compare)) . PHP_EOL;

print_r(combineArrays($moreNames, $evenMoreNames));