<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Gaji</title>
    <style>
        .content {
            display: grid;
            place-items: center;
        }


        td {
            padding: 5px;
        }

        h1 {
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

        .button li {
            list-style: none;
            display: inline-block;
            padding: 10px;
        }

        .button ul {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="content">
        <form action="#" method="POST">
            <table>
                <caption>Input</caption>
                <tr>
                    <th colspan="3">
                        <h1>Formulir Gaji</h1>
                    </th>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td><input type="text" name="nip"></td>
                </tr>
                <tr>
                    <td>Nama Pegawai</td>
                    <td>:</td>
                    <td><input type="text" name="Nmpegawai"></td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td><input type="number" name="Gjpokok"></td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan</td>
                    <td>:</td>
                    <td><input type="text" name="Tnjgnjbtan"></td>
                </tr>
                <tr>
                    <td>Tunjangan Kinerja</td>
                    <td>:</td>
                    <td><input type="text" name="Tnjgnknrja"></td>
                </tr>
                <tr>
                    <td>Potongan Pajak</td>
                    <td>:</td>
                    <td><input type="text" name="Potpjk"></td>
                </tr>
                <tr>
                    <td>Potongan Sumbangan</td>
                    <td>:</td>
                    <td><input type="text" name="Potsmbngan"></td>
                </tr>
            </table>

            <div class="button">
                <ul>
                    <li><input type="submit" value="Submit" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </form>
        <hr>
        <table>
            <caption>Output</caption>
            <tr>
                <th colspan="3">
                    <h1>Formulir Gaji</h1>
                </th>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td> <?php echo $_POST['nip'] ?></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td>:</td>
                <td> <?php echo $_POST['Nmpegawai'] ?></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td> <?php echo $_POST['Gjpokok'] ?></td>
            </tr>
            <tr>
                <td>Tunjangan Jabatan</td>
                <td>:</td>
                <td> <?php echo $_POST['Tnjgnjbtan'] ?></td>
            </tr>
            <tr>
                <td>Tunjangan Kinerja</td>
                <td>:</td>
                <td> <?php echo $_POST['Tnjgnknrja'] ?></td>
            </tr>
            <tr>
                <td>Potongan Pajak</td>
                <td>:</td>
                <td><?php echo $_POST['Potpjk'] . "%" ?></td>
            </tr>
            <tr>
                <td>Potongan Sumbangan</td>
                <td>:</td>
                <td><?php echo $_POST['Potsmbngan'] . "%" ?></td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>Total Gaji</td>
                <td>:</td>
                <td><?php $totalgaji = $_POST['Gjpokok']
                        + $_POST['Tnjgnjbtan'] + $_POST['Tnjgnknrja'];
                    echo $totalgaji ?></td>
            </tr>
            <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td><?php $gajibersih = $totalgaji
                        - (($totalgaji * ($_POST['Potpjk'] / 100))
                            + ($totalgaji * ($_POST['Potsmbngan'] / 100)));
                    echo $gajibersih ?></td>
            </tr>
        </table>
    </div>
</body>

</html>