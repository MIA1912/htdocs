<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If Majemuk</title>
</head>

<body>
    <?php
    $nilai = 90;
    if (($nilai >= 0) && ($nilai < 50)) {
        $grade = "E";
    } elseif (($nilai >= 50) && ($nilai < 60)) {
        $grade = "D";
    } elseif (($nilai >= 60) && ($nilai < 75)) {
        $grade = "C";
    } elseif (($nilai >= 75) && ($nilai < 85)) {
        $grade = "B";
    } elseif (($nilai >= 85) && ($nilai < 100)) {
        $grade = "A";
    } else { {
            $grade = "Nilai anda di luar jangkauan";
        }
        echo "Nilai Anda : $nilai, dikonversi menjadi $grade";
    }
    ?>
</body>

</html>