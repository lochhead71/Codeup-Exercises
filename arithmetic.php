<?php

$a = 7;
$b = 9;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo add(5, 9) . PHP_EOL;
echo subtract(45, 23) . PHP_EOL;
echo multiply(3, 6) . PHP_EOL;
echo divide(63, 9) . PHP_EOL;
echo modulus(64, 7) . PHP_EOL;
