import prettier from "prettier/standalone";
import phpPlugin from "@prettier/plugin-php/standalone";

prettier.format(YOUR_CODE, {
plugins: [phpPlugin],
parser: "php"
});
<?php

$ikan = " Lele ";
            $nasi = ' beras ';

print "aku makan pakai $nasi dan ikannya $ikan";
// strlen() = untuk return length string
echo strlen("$nasi");
// untuk melihat berapa huruf
echo str_word_count("Hello World");
// untuk melihat berapa kata
echo strrev(" Halo Dunia ");
// membalikkan string
echo strpos("Muhammad Ilham Aulia", "Ilham");
// melihat string berada di index ke berapa
echo str_replace("Aulia", "Ilham", "Hello Aulia");
// mengganti kata aulia jadi ilham
// https://www.w3schools.com/php/php_ref_string.asp
