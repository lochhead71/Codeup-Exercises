<?php

function throwErrorMessage($var1, $var2, $error = 'numberError') {
	if ($error == 'numberError') {
		return "ERROR: Both arguments must be numbers; \$a is a " . gettype($var1) . " and \$b is a " . gettype($var2) . ".";		
	} elseif ($error == 'divisorError') {
		return "ERROR: You can't divide by zero! Your divisor is " . $var2;
	}
}

function numericInputs ($x, $y) {
    if (is_numeric($x) && is_numeric($y)) {
    	return true;
	} else {
		return false;
	}
}

function add($a, $b) {
    if (numericInputs ($a, $b)) {
        return $a + $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function subtract($a, $b) {
    if (numericInputs ($a, $b)) {
		return $a - $b;
	} else {
        return throwErrorMessage($a, $b);
    }
}

function multiply($a, $b) {
    if (numericInputs ($a, $b)) {
		return $a * $b;
	} else {
        return throwErrorMessage($a, $b);
    }
}

function divide($a, $b) {
    if (numericInputs ($a, $b) && $b != 0){
		return $a / $b;
	} elseif ($b == 0) {
		return "ERROR: You can't divide by zero!";
	} else {
        return throwErrorMessage($a, $b, 'divisorError');
    }
}

function modulus($a, $b) {
    if (numericInputs ($a, $b)) {
		return $a % $b;
	} else {
        return throwErrorMessage($a, $b, 'divisorError');
    }
}

echo add(5, 9) . PHP_EOL;
echo subtract(45, 'twenty-three') . PHP_EOL;
echo multiply(3, 6) . PHP_EOL;
echo divide(63, 0) . PHP_EOL;
echo modulus(64, 7) . PHP_EOL;
