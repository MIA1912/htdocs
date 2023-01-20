<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funtions</title>
</head>

<body>
    <?php
    // Fungsi bawaan PHP
    // PHP memiliki lebih dari 1000 fungsi bawaan yang dapat dipanggil secara langsung, dari dalam skrip, untuk melakukan tugas tertentu.
    // Silakan lihat referensi PHP kami untuk ikhtisar lengkap tentang fungsi https://www.w3schools.com/php/php_ref_overview.asp .

    function salam()
    {
        echo "Assalamu'alaikum";
    }

    function nama($namadepan, string $namabelakang)
    {
        echo "Nama depan = $namadepan <br>";
        echo "Nama belakang = $namabelakang";
    }

    function penjumlahan($a, $b)
    {
        return $a + $b;
    }

    // PHP Return Type Declarations
    function addNumbers(float $a, float $b): int
    {
        return (int)($a + $b);
    }

    // Passing Arguments by Reference
    function addfive(&$value, &$value2)
    {
        $value += 5;
        $value2 += 10;
    }

    salam();
    echo "<br>";
    nama("Muhammad Ilham", "Aulia");
    echo "<br>";
    echo "Hasilnya = " . penjumlahan(10, 5) . "<br>";
    echo addNumbers(1.2, 5.2);
    echo "<br>";
    $num = 2;
    $num2 = 4;
    addfive($num, $num2);
    echo $num . "<br>";
    echo $num2 . "<br>";

    function greeting(&$jam)
    {
        if ($jam >= 4 && $jam <= 10) {
            echo "Selamat Pagi";
        } elseif ($jam >= 10 && $jam < 15) {
            echo "Selamat Siang";
        } elseif ($jam >= 14 && $jam < 18) {
            echo "Selamat Sore";
        } else {
            echo "Selamat Malam";
        }
    }

    $time = 18;
    echo greeting($time);



    ?>

</body>

</html>