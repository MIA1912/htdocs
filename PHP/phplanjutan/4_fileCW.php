<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Create and Write</title>
</head>

<body>

    <?php
    $myfile = fopen("../phpdasar/noFileExists.php", "w") or die("Unable open file!");
    $txt = "Muhammad Ilham Aulia\n";
    fwrite($myfile, $txt);
    $txt = "Muhammad Ilham Aulia\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    /* 
    resiko nya, text yang ditambahkan ke file tujuan, text yang ada di filetujuan akan hilang
    dan di ganti dengan text yang kita tambahkan
    Note : Jika menggunakan mode "w" 
    */
    ?>

    <?php
    $myfile = fopen("../phpdasar/noFileExists.php", "a") or die("Unable open file!");
    $txt = "Muhammad Iqbal Maulana\n";
    fwrite($myfile, $txt);
    $txt = "Muhammad Iqbal Maulana\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    // ! "a" artinya menambahkan text ke akhir file
    ?>


</body>

</html>