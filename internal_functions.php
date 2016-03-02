<?php

// TODO: Create your inspect() function here
function inspect($parameter) {
	$dataType = gettype($parameter);
	switch ($dataType) {
    case 'NULL':
        return "This is NULL";
    case '':
        return "This is an empty string";
    case 'boolean':
    	if (boolval($parameter) == 1) {
	        return "This is a boolean with the value of true.";
        } elseif (boolval($parameter) == 0) {
	        return "This is a boolean with the value of false.";
		}	        
    case 'string':
    	if ($parameter === '') {
    		return "This is an empty string.";
    	} else {
	        return "This is a string containing '" . $parameter . "'.";
        }
    case 'array':
    	if ($parameter === []) {
    		return "This is an empty array.";
    	} else {
			$description = '';
			$description .= "This is an array with the following items:\n";
			foreach ($parameter as $items) {
				$description .= "  $items" . PHP_EOL;
			}
			return $description;
    	}
	default:
		return "The {$dataType} is {$parameter}.";
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo PHP_EOL;
echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;
echo PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;
echo PHP_EOL;
