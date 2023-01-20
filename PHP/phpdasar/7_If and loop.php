<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkondisisan</title>
</head>

<body>
    <p>Kalimat ini dibuat menggunakan HTML saja </p>
    <?php
    echo "<p>Kalimat ini dibuat menggunakan standar PHP tag</p>";
    ?>
    <div>
        <label for="ternary">Sintaks Ternary Operator</label>
        <div id="ternary">
            Variable = (Condition) ? (Statement1) : (Statement2);
        </div>
        <div>
            Contoh :
            <br>
            <?php
            $nama = "Ilham";
            $Cnama = $nama == "Ilham" ? "Yes, his name is Ilham" : "No, this name not his name";
            echo $Cnama;
            ?>
        </div>
    </div>
    <br>
    <?php

    // If statement
    $a = 19;
    echo "Contoh Ifelseif Statement<br>";
    if ($a < 10) {
        echo "Anak-anak";
    } elseif ($a < 20) {
        echo "Remaja";
    } else {
        echo "Dewasa";
    }
    echo "<hr>";

    // Switch Case
    echo "Contoh switch case<br>";
    $laptop = "Macbook";

    switch ($laptop) {
        case 'Acer':
            echo "Merk Laptop kamu adalah Acer";
            break;
        case 'Asus':
            echo "Merk Laptop kamu adalah Asus";
            break;
        case 'HP':
            echo "Merk Laptop kamu adalah HP";
            break;
        case 'Dell':
            echo "Merk Laptop kamu adalah Dell";
            break;
        case 'Lenovo':
            echo "Merk Laptop kamu adalah Lenovo";
            break;
        default:
            echo "Merk Laptop kamu diantara Mackbook, Toshiba, Infinix, or Chromebook   :)";
            break;
    }
    echo "<hr>";

    // Perulangan
    // While loop
    $a = 1;
    echo "While Loop<br>";
    while ($a <= 10) {
        echo "The number is : $a <br>";
        $a++;
    }
    echo "<hr>";
    // Do While Loop
    echo "Do While Loop<br>";
    $a = 1;
    do {
        echo "The number is : $a <br>";
        $a++;
    } while ($a >= 5);
    echo "<hr>";
    // For Loop
    echo "For Loop<br>";
    for ($a = 1; $a <= 10; $a++) {
        echo "The number is : $a <br>";
    }
    // For Each = khusus array
    echo "<hr>";
    echo "For Each<br>";
    $laptop = array("Acer", "Asus", "Lenovo", "Dell");

    foreach ($laptop as $value) {
        echo " - $value <br>";
    }
    echo "<br>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }

    // ada juga break and continue
    ?>
</body>

</html>