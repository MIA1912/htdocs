<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Menggunakan Array Di PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="mb-5">
        Today We Are Learning About Array
    </h1>
    <?php
    $kota[0] = "Medan";
    $kota[1] = "Pematang Siantar";
    $kota[2] = "Padang";
    $kota[3] = "Palembang";
    $kota[4] = "Jakarta";
    $hari[0] = "Minggu";
    $hari[1] = "Senin";
    $hari[2] = "Selasa";
    $hari[3] = "Rabu";
    $hari[4] = "Kamis";
    $hari[5] = "Jum'at";
    $hari[6] = "Sabtu";

    $gabung = array_merge($kota, $hari);
    $Jlhkota = count($kota);
    $Jlhhari = count($hari);
    $Jlhgabung = sizeof($gabung);

    print "<strong> Elemen array kota : </strong>  <br>";
    print_r($kota);
    echo "<br> <br>";
    print "<strong> Elemen array hari : </strong> <br>";
    print_r($hari);
    echo "<br> <br>";
    print "<strong> Elemen array gabung : </strong> <br>";
    print_r($gabung);
    echo "<br> <br> <br>";
    print "Jumlah array kota  : ";
    print "$Jlhkota <br>";
    print "Jumlah array hari  : ";
    print "$Jlhhari <br>";
    print "Jumlah array gabung  : ";
    print "$Jlhgabung <br>";



    ?>
</body>

</html>