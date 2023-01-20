<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nilai = "25";
    if (($nilai > 90) and ($nilai < 101)) {
        $hasil = "A";
    } elseif (($nilai > 80) and ($nilai < 91)) {
        $hasil = "B";
    } elseif (($nilai > 60) and ($nilai < 81)) {
        $hasil = "C";
    } elseif (($nilai > 40) and ($nilai < 61)) {
        $hasil = "D";
    } elseif (($nilai >= 0) and ($nilai < 41)) {
        $hasil = "E";
    } else {
        $hasil = "Nilai diluar kategori";
    }
    echo "Nilai Anda masuk dalam kategori " . $hasil;
    ?>
</body>

</html>