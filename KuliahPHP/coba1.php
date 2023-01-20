<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="number" name="tgl"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Berenang">Berenang
                    <input type="checkbox" name="hobi[]" value="Menggambar">Menggambar
                    <input type="checkbox" name="hobi[]" value="Menulis">Menulis
                    <input type="checkbox" name="hobi[]" value="Jalan-Jalan">Jalan - Jalan
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Enter" name="enter"></td>
            </tr>
        </table>
    </form>
    <?php
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl'];
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <?php
                $hobi = $_POST['hobi'];
                $jlhhobi = count($hobi);
                echo "Kamu mempunyai $jlhhobi hobi yaitu :";
                ?>
                <ul>
                    <?php
                    for ($i = 0; $i < $jlhhobi; $i++) {
                        echo "<li>" . "$hobi[$i] " . "</li>";
                    }
                    ?>
                </ul>
            </td>
        </tr>
    </table>
</body>

</html>