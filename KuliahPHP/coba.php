<html>

<head>
    <title>PHP</title>
</head>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    h1 {
        text-align: center;
        color: steelblue;
    }

    div {
        width: 50%;
        margin: auto;
    }

    input[type="submit"] {
        border: 2px solid green;
        background-color: gray;
        color: white;
    }
</style>

<body>
    <div>
        <h1>Form Mahasiswa</h1>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option>Manajemen Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Teknik Informatika</option>
                            <option>Komputerisasi Akuntansi</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Kirim!" width="50%">
        </form>


        <?php
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        ?>

        <table>
            <tr>
                <td>Nama anda</td>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>NIM anda</td>
                <td>:</td>
                <td><?php echo $nim ?></td>
            </tr>
            <tr>
                <td>Jurusan anda</td>
                <td>:</td>
                <td><?php echo $jurusan ?></td>
            </tr>
        </table>
    </div>

</body>

</html>