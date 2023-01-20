<?php
require_once 'functions.php';

// tampil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) : ?>
    <?php
    if (ubah($_POST) > 0) {
        echo "
    <script>
    alert('data berhasil di ubah');
    document.location.href = 'index.php';
    </script>
    ";
    } else {
        echo "
    <script>
    alert('data gagal di ubah');
    document.location.href = 'index.php';
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
    <title>Ubah data mahasiswa</title>
    <style>
        table,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Ubah data mahasiswa</h1>
    <form action="" method="post">
        <table>
            <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" value="<?= $mhs['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td><label for="nrp">NRP</label></td>
                <td>:</td>
                <td><input type="text" id="nrp" name="nrp" value="<?= $mhs['nrp'] ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="<?= $mhs['email'] ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan" value="<?= $mhs['jurusan'] ?>"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>:</td>
                <td><input type="text" id="gambar" name="gambar" value="<?= $mhs['gambar'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Ubah Data!</button></td>
            </tr>
        </table>

    </form>
</body>

</html>