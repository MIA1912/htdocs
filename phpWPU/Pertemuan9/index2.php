<!-- file php ini bisa CRUD -->
<!-- biasakan script untuk koneksi database diletakkan di awal baris code -->
<!-- ! ini yang original -->
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "ilham1912aulia", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

/*
    ! ambil data(fetch) mahasiswa dari object result
    - ada 4 cara untuk mengambil data
        ! Disarankan menggunakan row dan assoc
        * mysqli_fetch_row()    // return array numeric
        * mysqli_fetch_assoc()  // return array associative

        * mysqli_fetch_array()  // return array numeric + associative
        * mysqli_fetch_object() // return object, cth = $mhs->nama
*/

/*
while ($mhs = mysqli_fetch_assoc($result)) {
    var_dump($mhs);
}
*/



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
            while ($row = mysqli_fetch_assoc($result)) :
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
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>