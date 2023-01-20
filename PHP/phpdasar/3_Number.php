<?php

$x = 1912;
var_dump(is_int($x)); //ada juga is_integer dan is_long, sama aja

$y = 19.12;
var_dump(is_int($y));

$x = 10.365;
var_dump(is_float($y)); //ada juga is_double, sama aja

// casting int
$int_cast = (int)$x;
echo "yang int $int_cast";

$int_cast = (string)$x;
echo " yang string $int_cast";
