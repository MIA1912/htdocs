<!-- file php ini bisa CRUD -->
<!-- biasakan script untuk koneksi database diletakkan di awal baris code -->


<?php
require_once 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            padding: 10px;
            width: max-content;
        }

        table {
            border-collapse: collapse;
        }

        img {
            height: 75px;
            width: auto;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php
            foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td>
                        <a href="">Ubah</a> |
                        <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a>
                    </td>
                    <td>
                        <img src="../Gambar/<?= $mhs["gambar"]; ?>" alt="">
                    </td>
                    <td><?= $mhs["nrp"] ?></td>
                    <td><?= $mhs["nama"] ?></td>
                    <td><?= $mhs["email"] ?></td>
                    <td><?= $mhs["jurusan"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>