<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #childBox {
            align-self: center;
            justify-self: center;
        }

        table {
            margin: auto;
        }

        #table table {
            border-collapse: collapse;
            width: max-content;
        }

        #table td,
        #table th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        #table th {
            background-color: coral;
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
    <div id="parentBox">
        <div id="childBox">
            <form action="#" method="post">

                <table>
                    <caption>
                        <h3>Menghitung Nilai Mahasiswa</h3>
                    </caption>
                    <tr>
                        <td>Nomor Induk Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Nilai Kehadiran</td>
                        <td>:</td>
                        <td><input type="number" name="NH"></td>
                    </tr>
                    <tr>
                        <td>Nilai Kuis</td>
                        <td>:</td>
                        <td><input type="number" name="NK"></td>
                    </tr>
                    <tr>
                        <td>Nilai Tugas</td>
                        <td>:</td>
                        <td><input type="number" name="NT"></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td>:</td>
                        <td><input type="number" name="NUTS"></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td>:</td>
                        <td><input type="number" name="NUAS"></td>
                    </tr>
                </table>
                <div class="button">
                    <ul>
                        <li><input type="submit" value="Submit" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <?php

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $NH = $_POST['NH'];
    $NK = $_POST['NK'];
    $NT = $_POST['NT'];
    $NUTS = $_POST['NUTS'];
    $NUAS = $_POST['NUAS'];
    $Ntotal = ($NH * (10 / 100)) + ($NK * (10 / 100))
        + ($NT * (10 / 100)) + ($NUTS * (30 / 100))
        + ($NUAS * (40 / 100));

    $grade = array("A", "B", "C", "D", "E");
    $predikat = array(
        "Sangat Baik",
        "Baik",
        "Kurang",
        "Gagal"
    );
    $keterangan = array("Lulus", "Tidak Lulus");

    if ($Ntotal >= 90 && $Ntotal <= 100) {
        $grd = $grade[0];
        $prdkt = $predikat[0];
        $ket = $keterangan[0];
    } elseif ($Ntotal >= 80 && $Ntotal < 90) {
        $grd = $grade[1];
        $prdkt = $predikat[1];
        $ket = $keterangan[0];
    } elseif ($Ntotal >= 70 && $Ntotal < 80) {
        $grd = $grade[2];
        $prdkt = $predikat[2];
        $ket = $keterangan[0];
    } elseif ($Ntotal >= 60 && $Ntotal < 70) {
        $grd = $grade[3];
        $prdkt = $predikat[3];
        $ket = $keterangan[1];
    } else {
        $grd = $grade[4];
        $prdkt = $predikat[4];
        $ket = $keterangan[1];
    }

    echo
    '<div id="table">
    <table>
        <caption>Data Mahasiswa</caption>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Nilai Kehadiran</th>
            <th>Nilai Kuis</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Total Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Keterangan</th>
        </tr>
        <tr>';
    echo "<td>$nim</td>";
    echo "<td>$nama</td>";
    echo "<td>$NH</td>";
    echo "<td>$NK</td>";
    echo "<td>$NT</td>";
    echo "<td>$NUTS</td>";
    echo "<td>$NUAS</td>";
    echo "<td>$Ntotal</td>";
    echo "<td>$grd</td>";
    echo "<td>$prdkt</td>";
    echo "<td>$ket</td>";
    echo "</tr>
    </table>
</div>
";
    ?>

    <!-- 
UAS: 40%
UTS: 30%
Tugas: 10%
kuis: 10%
Kehadiran: 10% 
-->
</body>

</html>