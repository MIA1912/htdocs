<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $setup = array("Laptop", "Mouse Wireless", "Mousepad");
    echo "I have " . $setup[0] . "," . $setup[1] . " and " . $setup[2] . ".";
    echo "<br>";
    // Loop Array
    $arrlength = count($setup);

    for ($i = 0; $i < $arrlength; $i++) {
        echo $setup[$i] . "<br>";
    }

    // Associative Arrays
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old." . "<br>";


    echo "<ul>";
    foreach ($age as $x => $x_value) {
        echo  "<li>" . "Key=" . $x . ", Value=" . $x_value . "</li>";
    }
    echo "</ul>";

    $kendaraan = array("1" => "Mobil", "2" => "Bus", "3" => "Truk", "4" => "Sepeda Motor", "5" => "Sepeda", "
    6" => "Becak", "7" => "Andong");
    sort($kendaraan);

    echo "<ul>";
    foreach ($kendaraan as $key => $value) {
        echo "<li>" . "No " . $key . " " . $value . "</li>";
    }
    echo "</ul>";

    // Sorting Array
    // cara nya dengan gunakan sorting nya dulu trus bikin perulangannya untuk memanggil array
    /* 
    sort() = untuk asc array
    rsort() = untuk desc array
    asort() = asc associative array untuk value
    ksort() = asc associative array untuk key
    arsort() = desc associative array untuk value
    krsort() = desc associative array untuk key
    */

    // Array Multidimensi 
    $namaanak = array(
        array("Muhammad", "Ilham", "Aulia"),
        array("Muhammad", "Iqbal", "Maulana"),
        array("Ayunda", "Khairunnisa")
    );

    echo $namaanak[0][0] . " " . $namaanak[0][1] . " " . $namaanak[0][2] . "<br>";
    echo $namaanak[1][0] . " " . $namaanak[1][1] . " " . $namaanak[1][2] . "<br>";
    echo $namaanak[2][0] . " " . $namaanak[2][1] . " " . "<br>";

    for ($row = 2; $row >= 0; $row--) {
        echo "<p><b>Nama anak $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $namaanak[$row][$col] . "</li>";
        }
        echo "</ul>";
    }


    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }



    //sort()
    $setup = array("Laptop", "Mouse Wireless", "Mousepad");
    sort($setup);

    $clength = count($setup);
    for ($x = 0; $x < $clength; $x++) {
        echo $setup[$x];
        echo "<br>";
    }


    ?>


</body>

</html>