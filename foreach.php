<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $datatypes) {
	if (is_int($datatypes)) {
		echo "{$datatypes} is an integer.\n";
	} elseif (is_float($datatypes)) {
		echo "{$datatypes} is a float.\n";
	} elseif (is_bool($datatypes)) {
		echo "{$datatypes} is a boolean.\n";
	} elseif (is_array($datatypes)) {
		foreach ($datatypes as $item) {
			echo "{$item} is an item on an array.\n";
		}
	} elseif (is_null($datatypes)) {
		echo "{$datatypes} is a null.\n";
	} elseif (is_string($datatypes)) {
		echo "{$datatypes} is a string.\n";
	}
}