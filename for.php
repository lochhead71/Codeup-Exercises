<?php

fwrite(STDOUT, "Please type an integer: ");
	$startNum = (int)trim(fgets(STDIN));

fwrite(STDOUT, "Please type another: ");
	$endNum = (int)trim(fgets(STDIN));

for ($a = $startNum; $a <= $endNum; $a++) {
	echo "$a\n";
}