<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi File</title>
</head>

<body>
    <?php
    // PHP memiliki beberapa fungsi untuk membuat, membaca, mengunggah, dan mengedit file.
    $myfile = fopen("../Tumbal/webdictionary.html", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("../Tumbal/webdictionary.html"));
    // Parameter pertama fread()berisi nama file yang akan dibaca dan parameter kedua menentukan jumlah byte maksimum untuk dibaca.
    fclose($myfile);
    // Fungsi fclose()ini digunakan untuk menutup file yang terbuka.
    ?>

    <?php
    $myfile = fopen("../Tumbal/singkatan.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    ?>

    <?php
    $myfile = fopen("../Tumbal/singkatan.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
        // echo fgetc($myfile); 
        // untuk read file satu persatu karakter.
    }
    fclose($myfile);
    ?>
    <!-- https://www.w3schools.com/php/php_ref_filesystem.asp 
    referensi sistem file php -->
    <!-- 
    deskripsi model
    r Buka file untuk read-only. Penunjuk file dimulai di awal file
    w Buka file untuk menulis saja. Menghapus isi file atau membuat file baru jika tidak ada. Penunjuk file dimulai di awal file
    a Buka file untuk menulis saja. Data yang ada dalam file dipertahankan. Penunjuk file dimulai di akhir file. Membuat file baru jika file tidak ada
    x Membuat file baru untuk menulis saja. Mengembalikan FALSE dan kesalahan jika file sudah ada
    r+ Buka file untuk baca/tulis. Penunjuk file dimulai di awal file
    w+ Buka file untuk baca/tulis. Menghapus isi file atau membuat file baru jika tidak ada. Penunjuk file dimulai di awal file
    a+ Buka file untuk baca/tulis. Data yang ada dalam file dipertahankan. Penunjuk file dimulai di akhir file. Membuat file baru jika file tidak ada
    x+ Membuat file baru untuk baca/tulis. Mengembalikan FALSE dan kesalahan jika file sudah ada -->
</body>

</html>