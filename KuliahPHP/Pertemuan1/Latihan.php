<?php
// define variables and set to empty values
$nim = $nama = $jk = $kesan = $t_lahir = $tgl_lahir = $agama = $asalsekolah = $alamat =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = testinput($_POST["nim"]);
    $nama = testinput($_POST["nama"]);
    $t_lahir = testinput($_POST["t_lahir"]);
    $kesan = testinput($_POST["kesan"]);
    $jk = testinput($_POST["jk"]);
    $tgl_lahir = testinput($_POST["tgl_lahir"]);
    $agama = testinput($_POST["agama"]);
    $asalsekolah = testinput($_POST["asalsekolah"]);
    $alamat = testinput($_POST["alamat"]);
}

function testinput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <style>
        #parentBox {
            display: grid;
            background-color: #1d1c21;
        }

        #childBox {
            align-self: center;
            justify-self: center;
            background-color: #151418;
            box-shadow: -1px 0px 15px 10px #000;
        }

        @font-face {
            font-family: "Lato";
            src: url("G:\CSSwithW3School\Font\Lato\Lato-Regular.ttf");
        }

        h1,
        h2,
        h4 {
            font-family: "Lato";
        }

        * {
            font-family: sans-serif;
            color: white;
        }

        table {
            width: fit-content;
            margin: auto;
        }

        h1 {
            text-align: center;
            text-decoration: underline gray dashed;
        }

        h2 {
            text-decoration: underline overline;
            text-transform: uppercase;
        }

        .button li {
            list-style: none;
            display: inline-block;
            padding: 10px;
        }

        .button ul {
            text-align: center;
        }

        input[type="reset"] {
            padding: 10px 20px;
            color: red;
            text-transform: uppercase;
            transition: .5s;
            letter-spacing: 4px;
            border: 1px solid red;
        }

        input[type="submit"] {
            padding: 10px 20px;
            color: green;
            text-transform: uppercase;
            transition: .5s;
            letter-spacing: 4px;
            border: 1px solid green;
        }

        input[type="reset"]:hover {
            background: red;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 5px red, 0 0 25px red, 0 0 50px red, 0 0 100px red;
        }

        input[type="submit"]:hover {
            background: green;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 100px green;
        }
    </style>

</head>

<body>
    <div id="parentBox">
        <div id="childBox">
            <h1>Data Mahasiswa</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <table>
                    <caption>
                        <h2>Input</h2>
                    </caption>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td class="border"><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="t_lahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jk">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="PRIA">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td>
                            <select name="asalsekolah">
                                <option value="SMA Negeri Pematang Siantar">SMA Negeri Pematang Siantar</option>
                                <option value="SMA Swasta Pematang Siantar">SMA Swasta Pematang Siantar</option>
                                <option value="SMA Negeri Simalungun">SMA Negeri Simalungun</option>
                                <option value="SMA Swasta Simalungun">SMA Swasta Simalungun </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Kesan Selama Kuliah Di ATB</td>
                        <td>:</td>
                        <td><textarea name="kesan" cols="20" rows="5"></textarea></td>
                    </tr>
                </table>
                <div class="button">
                    <ul>
                        <li><input type="reset" value="Reset" /></li>
                        <li><input type="submit" value="Submit" /></li>
                    </ul>
                </div>
            </form>
            <hr>
            <?php
            echo "<table >
            <caption>
            <h2>Output</h2>
            <h4>From No-Embedded Script</h4>
            </caption>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td>$nim</td>
    </tr>
    <tr>
        <td>Nama Siswa</td>
        <td>:</td>
        <td>$nama</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>$t_lahir</td>
    </tr>";
            echo "
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>";
            $new_date = date('d-F-Y', strtotime($_POST['tgl_lahir']));
            echo "<td>$new_date</td>";
            echo "
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>$jk</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>$agama</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>$asalsekolah</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>$alamat</td>
    </tr>
    <tr>
        <td><pre>Kesan Selama Kuliah 
Di ATB</pre></td>
        <td>:</td>
        <td>$kesan</td>
    </tr>
    </table>
    <hr>
    "
            ?>
            <table>
                <caption>
                    <h4>From Embedded Script</h4>
                </caption>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= isset($_POST['nim']) ? $_POST['nim'] : '' ?></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><?= isset($_POST['nama']) ? $_POST['nama'] : '' ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= isset($_POST['t_lahir']) ? $_POST['t_lahir'] : '' ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php $new_date = date('d-m-Y', strtotime($_POST['tgl_lahir']));
                        echo $new_date ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= isset($_POST['jk']) ? $_POST['jk'] : '' ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= isset($_POST['agama']) ? $_POST['agama'] : '' ?></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><?= isset($_POST['asalsekolah']) ? $_POST['asalsekolah'] : '' ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= isset($_POST['alamat']) ? $_POST['alamat'] : '' ?></td>
                </tr>
                <tr>
                    <td>
                        <div>Kesan Selama Kuliah</div>
                        <div>Di ATB</div>
                    </td>
                    <td>:</td>
                    <td><?= isset($_POST['kesan']) ? $_POST['kesan'] : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>