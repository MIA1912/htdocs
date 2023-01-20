<?php
require_once 'functions.php';

if (isset($_POST['submit'])) : ?>
    <?php
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

    ?>
<?php endif ?>

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
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="nrp">NRP</label></td>
                <td>:</td>
                <td><input type="text" id="nrp" name="nrp"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>:</td>
                <td><input type="text" id="gambar" name="gambar"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah Data!</button></td>
            </tr>
        </table>

    </form>
</body>

</html>