<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function salesReport($filename) {
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	$array = explode(PHP_EOL, $contents);
	foreach ($array as $key => $entry) {
		$seg = substr($entry, 0, 3);
		if ($seg == "Mon" || $seg == "Dat" || $seg == "Off" || $seg == "===" || $seg == "Emp" || $seg == "***") {
			array_shift($array);
		} else {
			$emp = explode(",", $entry);
			$array[] = $emp;
			array_shift($array);
		}
		
	}
	var_dump($array);
}

salesReport('sales.txt');