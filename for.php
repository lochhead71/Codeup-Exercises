<?php

fwrite(STDOUT, "Please type an integer: ");
	$startNum = (int)trim(fgets(STDIN));

fwrite(STDOUT, "Please type another: ");
	$endNum = (int)trim(fgets(STDIN));

fwrite(STDOUT, "Choose an increment value: ");
	$incrValue = (int)trim(fgets(STDIN));

if ((bool)$incrValue == false) {
	$incrValue = 1;
}

do {

	for ($a = $startNum; $a <= $endNum; $a += $incrValue) {
		echo "$a\n"; d
	}

} while {is_numeric($startNum) && is_numeric($endNum) && is_numeric($incrValue)}