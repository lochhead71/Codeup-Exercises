<?php

while ($startNum == 0) {
	fwrite(STDOUT, "Please type an integer: ");
	$startNum = (int)trim(fgets(STDIN));
}

while ($startNum > $endNum) {
	fwrite(STDOUT, "Please enter an integer greater than the first value.\n");
	$endNum = (int)trim(fgets(STDIN));
}

fwrite(STDOUT, "Choose an increment value: ");
	$incrValue = (int)trim(fgets(STDIN));

if ($incrValue == 0) {
	$incrValue = 1;
}

for ($a = $startNum; $a <= $endNum; $a += $incrValue) {
	echo "$a\n";
}