<?php

$squares = array_map(function ($x) {
	return $x**2;
}, range(1, 100));
$squares = array_sum($squares);

$sum = array_sum(range(1, 100))**2;

echo $sum-$squares . "\n";
