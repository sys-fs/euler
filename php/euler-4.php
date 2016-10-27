<?php

$x = $y = 100;
$res = $tmp = 0;
while ($x < 1000) {
	$tmp = $x * $y;
	// type coercion is a friend here
	if ($tmp == strrev("$tmp") && $tmp > $res)
		$res = $tmp;
	$y++;
	if ($y > 999) {
		$y = 100;
		$x++;
	}
}
echo "$res\n";