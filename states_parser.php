<?php

//request file to parse
echo "Please input a filename: \n";
$filename = trim(fgets(STDIN));

// open file
$handle = fopen($filename, 'r');
$contentString = trim(fread($handle, filesize($filename)));
fclose($handle);

// convert file to array
$arrayOfStrings = explode("\n", $contentString);

// get rid of column label header
array_shift($arrayOfStrings);

$arrayOfStates = [];
// interate array to manipulate elements
foreach ($arrayOfStrings as $string) {
	$stateInfo = explode(",", $string);
	$abbr = $stateInfo[0];
	$stateName = $stateInfo[1];
	$stateAssocArray[$abbr] = $stateName;
	$arrayOfStates[] = $stateAssocArray;
}

var_dump($arrayOfStates);
