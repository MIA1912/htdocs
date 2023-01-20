<?php
// konstanta adalah variable/nilai yang tidak bisa dirubah
// konstanta sifatnya global

// Syntax
// define(name, value, case-insensitive)

define('NAMA', ' Muhammad Ilham Aulia. ');
echo NAMA . "<br>";
$name = "Ilham";
echo $name . "<br>";
$name = "Aulia";
echo $name . "<br>";

// constant array
define('LAPTOP', ["acer", "asus", "hp", "macbook", "dell", "lenovo"]);
echo "brand laptop ke-3 adalah " . LAPTOP[2] . "<br>";
define('NAMA1', "Muhammad Ilham");
echo NAMA1 . "<br>";
function namaLengkap()
{
    echo NAMA;
}

namaLengkap();
