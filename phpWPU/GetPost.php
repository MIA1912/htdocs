<!DOCTYPE html>
<html lang="en">

<?php
$supercar = [
    [
        "nama" => "Ferrari Portofino",
        "tahun" => "2021",
        "mesin" => "V8",
        "warna" => "merah",
        "gambar" => "https://imgcdnblog.carvaganza.com/wp-content/uploads/2017/09/Ferrari-Portofino_01.jpg"
    ],
    [
        "nama" => "Lamborghini Aventador SVR Track-Only",
        "tahun" => "2021",
        "mesin" => "V12",
        "warna" => "abu-abu",
        "gambar" => "https://imgx.gridoto.com/crop/84x65:813x485/700x465/photo/2019/09/04/2236543026.jpg"
    ]
]
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get dan Post</title>
</head>

<body>

    <?php
    // Superglobals
    // variables global milik php
    // Merupakan Array Associative


    // $_GET
    // $_GET["nama"] = "Muhammad Ilham Aulia";
    // $_GET["nim"] = "202101030008";

    // cara memasukkan nilai $_GET ke url browser dengan buat ? di akhir url dan tulis key dan valuenya
    // contoh : nama=Muhammad Ilham Aulia&NIM=202101030008
    // var_dump($_GET)
    ?>

    <h1>Daftar Supercars</h1>
    <ul>
        <?php
        foreach ($supercar as $keySC) : ?>
            <li>
                <a href="/phpWPU/Latihan2.php?
                    gambar= <?= $keySC["gambar"] ?>&
                    nama=<?= $keySC["nama"] ?> &
                    tahun= <?= $keySC["tahun"] ?> &
                    mesin= <?= $keySC["mesin"] ?> &
                    warna= <?= $keySC["warna"] ?> 
                  "><?= $keySC["nama"] ?></a>
            </li>
        <?php endforeach;
        ?>
    </ul>
</body>

</html>