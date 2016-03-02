<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($value, $array) {
	$result = array_search($value, $array);
	if ($result !== false) {
		return "True";
	} else {
		return "False";
	}
}

echo isInArray('Bob', $names) . PHP_EOL;