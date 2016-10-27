<?php

function fib() {
	$x = 0;
	$y = 1;
	$array = array();

	while ($y <= 4000000) {
		$y += $x;
		$x = $y - $x;
		$array[] = $y;
	}

	return $array;
}

$array = fib();
$array = array_filter($array, function ($x) {
	return $x % 2 === 0;
});
echo array_sum($array) . "\n";
