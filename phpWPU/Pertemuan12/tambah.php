<?php
require_once 'functions.php';

if (isset($_POST['submit'])) {
    // ketikkan vardump untuk melihat index arraynya
    // var_dump($_POST);
    // var_dump($_FILES);

    if (tambah($_POST) > 0) {
        echo "
    <script>
    alert('data berhasil di tambah');
    document.location.href = 'index.php';
    </script>
    ";
    } else {
        echo "
    <script>
    alert('data gagal di tambah');
    </script>
    ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
    <style>
        table,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Tambah data mahasiswa</h1>
    <!--
        encytype digunakan untuk membuat jalur untuk
        $_post untuk text dan $_file nya itu untuk file
        jadi jika di vardump $_post maka input bertype file tidak akan ditampilkan atau dikelola
    -->

    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="nrp">NRP</label></td>
                <td>:</td>
                <td><input type="text" id="nrp" name="nrp" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>:</td>
                <td><input type="file" id="gambar" name="gambar"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah Data!</button></td>
            </tr>
        </table>

    </form>
</body>

</html>