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
            foreach ($mahasiswa as $row) :
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td>
                        <a href="">Ubah</a> |
                        <a href="">Hapus</a>
                    </td>
                    <td>
                        <img src="../Gambar/<?php echo $row["gambar"]; ?>" alt="">
                    </td>
                    <td><?php echo $row["nrp"] ?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["jurusan"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>