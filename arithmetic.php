<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers; \$a is {$a} and \$b is {$b}.\n";
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
        return "ERROR: Both arguments must be numbers; \$a is {$a} and \$b is {$b}.\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {
        return "ERROR: Both arguments must be numbers; \$a is {$a} and \$b is {$b}.\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b != 0){
		return $a / $b;
	} elseif ($b == 0) {
		return "ERROR: You can't divide by zero!\n";
	} else {
        return "ERROR: Both arguments must be numbers; \$a is {$a} and \$b is {$b}.\n";
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
        return "ERROR: Both arguments must be numbers; \$a is {$a} and \$b is {$b}.\n";
    }
}

echo add(5, 9) . PHP_EOL;
echo subtract(45, 'twenty-three') . PHP_EOL;
echo multiply(3, 6) . PHP_EOL;
echo divide(63, 0) . PHP_EOL;
echo modulus(64, 7) . PHP_EOL;
