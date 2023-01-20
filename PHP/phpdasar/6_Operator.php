<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operator</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<?php
$x = 12;
$y = 2;
?>

<body>
    <div>
        <ul>
            <li>x = 12</li>
            <li>y = 2</li>
        </ul>
    </div>
    <h1>Arithmetic Operators</h1>
    <ul>
        <li><?php echo "$x + $y = " . $x + $y; ?></li>
        <li><?php echo " $x - $y = " . $x - $y; ?></li>
        <li><?php echo " $x * $y = " . $x * $y; ?></li>
        <li><?php echo " $x / $y = " . $x / $y; ?></li>
        <li><?php echo " $x % $y = " . $x % $y; ?></li>
        <li><?php echo " $x ** $y = " . $x ** $y; ?></li>
    </ul>
    <br>
    <h1>Assignment Operators</h1>
    <ul>
        <li>
            <?php echo " $x += $y = " . $x += $y; ?>
        </li>
        <li>
            <?php echo " $x -= $y = " . $x -= $y; ?>
        </li>
        <li>
            <?php echo " $x *= $y = " . $x *= $y; ?>
        </li>
        <li>
            <?php echo " $x /= $y = " . $x /= $y; ?>
        </li>
        <li>
            <?php echo " $x %= $y = " . $x %= $y; ?>
        </li>
    </ul>
    <br>
    <?php
    $a = 19;
    $b = "19";
    ?>
    <div>
        <ul>
            <li>a = 19</li>
            <li>b = 19</li>
        </ul>
    </div>
    <h1>Comparison Operators</h1>
    <ul>
        <li>
            <?php
            echo " $a == $b is ";
            var_dump($a == $b); // true karena a dan b setara 
            ?>
        </li>
        <li>
            <?php
            echo " $a === $b is ";
            var_dump($a === $b); // false karena beda tipe data 
            ?>
        </li>
        <li>
            <?php
            echo " $a != $b is ";
            var_dump($a != $b);
            ?>
        </li>
        <li>
            <?php
            echo " $a <> $b is "; // sama dengan !=
            var_dump($a <> $b);
            ?>
        </li>
        <li>
            <?php
            echo " $a < $b is ";
            var_dump($a < $b);
            ?>
        </li>
        <li>
            <?php
            echo " $a > $b is ";
            var_dump($a > $b);
            ?>
        </li>
        <li>
            <?php
            echo " $a >= $b is ";
            var_dump($a >= $b);
            ?>
        </li>
        <li>
            <?php
            echo " $a <= $b is ";
            var_dump($a <= $b);
            ?>
        </li>
        <li>
            <?php
            echo " $a <=> $b is ";
            // return 0 jika nilainya sama, -1 jika a < b, +1 jika a > b
            var_dump($a <=> $b);
            ?>
        </li>
    </ul>
</body>

<?php
// Increment dan Decrement Operators
++$a;
echo "$a";
$a++;
echo "$a";
--$a;
echo "$a";
$a--;
echo "$a";

// Logical Operator
// and,or,xor = false jika keduanya benar,&&,||,!
echo "<br>";
// String operators
$m = " PHP ";
$n = " With ";
$o = " W3School ";

$p = $m . $n . $o;
$m .= $n .= $o;
echo $p;
echo "<br>";
echo $m;

// array Operator
$brandHP1 = array('s' => "SAMSUNG", 'i' => "INFINIX");
$brandHP2 = array('o' => "OPPO", 'v' => "VIVO");
echo "<br>";
print_r($brandHP1 + $brandHP2);
var_dump($brandHP1 == $brandHP2);
var_dump($brandHP1 === $brandHP2);
var_dump($brandHP1 != $brandHP2);
var_dump($brandHP1 !== $brandHP2);
var_dump($brandHP1 <> $brandHP2);

// Conditional Assignment Operators
// Ternary
$gender = "pria";
$hi = $gender == "pria" ? "hi bro " : "hi nona";
echo "<br>";
echo $hi;
echo "<br>";
// null coalescing
$data = [];
$action = $data['action'] ?? 'nothing';

echo $action;
