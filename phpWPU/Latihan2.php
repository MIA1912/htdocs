<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["mesin"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["gambar"])
) {
    // redirect 
    header("Location: GetPost.php ");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Supercar</title>
</head>

<body>
    <!-- Get -->
    <!-- data dikirim lewat url -->
    <ul>
        <li><img src="<?= $_GET["gambar"] ?>"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["tahun"] ?></li>
        <li><?= $_GET["mesin"] ?></li>
        <li><?= $_GET["warna"] ?></li>
    </ul>

    <p>
        pergi ke <a href="/phpWPU/GetPost.php">Awal </a>
    </p>
</body>

</html>