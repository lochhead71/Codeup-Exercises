<?php

$a = 7;
$b = 9;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a / $b;
	} else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) && $b != 0{
		return $a % $b;
	} elseif ($b == 0)
		return "ERROR: You can\'t divide by zero!\n"
	 else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

echo add(5, 9) . PHP_EOL;
echo subtract(45, 23) . PHP_EOL;
echo multiply(3, 6) . PHP_EOL;
echo divide(63, 9) . PHP_EOL;
echo modulus(64, 7) . PHP_EOL;
