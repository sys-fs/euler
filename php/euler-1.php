<?php

$array = array();
$array = array_filter(range(1, 1000), function ($x) {
	return $x % 3 === 0 || $x % 5 === 0;
});
echo array_sum($array) . "\n";
