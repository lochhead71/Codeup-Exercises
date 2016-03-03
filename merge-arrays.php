<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($firstArray, $secondArray) {
	$mergedArrays = [];
	foreach($firstArray as $key => $name) {
		$result = array_search($name, $secondArray);
		if ($firstArray[$key] == $secondArray[$result]) {
			$mergedArrays[] = $firstArray[$result];
		} elseif ($result === false) {
			$mergedArrays[] = $firstArray[$key];
			$mergedArrays[] = $secondArray[$key];
		}
	}
	return $mergedArrays;
}

print_r(combineArrays($names, $compare));