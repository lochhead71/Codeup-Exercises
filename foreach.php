<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $datatypes) {
	if (is_array($datatypes)) {
		echo gettype($datatypes) . PHP_EOL;
		foreach ($datatypes as $items) {
			echo $items . PHP_EOL;
		}
	} else {
		echo $datatypes . PHP_EOL;
	}
}