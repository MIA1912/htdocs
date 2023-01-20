<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    date_default_timezone_set('Asia/Jakarta'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $hari = date("D");
    $bln = date("M");
    $tgl = date("d");
    $tahun = date("Y");
    $jam = date("H");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;
        case 'Mon':
            $hari_ini = "Senin";
            break;
        case 'Tue':
            $hari_ini = "Selasa";
            break;
        case 'Wed':
            $hari_ini = "Rabu";
            break;
        case 'Thu':
            $hari_ini = "Kamis";
            break;
        case 'Fri':
            $hari_ini = "Jum'at";
            break;
        case 'Sat':
            $hari_ini = "Sabtu";
            break;
        default:
            echo "Item anda tidak di ketahui";
            break;
    }

    switch ($bln) {
        case 'Jan':
            $bln_ini = "Januari";
            break;
        case 'Feb':
            $bln_ini = "Februari";
            break;
        case 'Mar':
            $bln_ini = "Maret";
            break;
        case 'Apr':
            $bln_ini = "April";
            break;
        case 'May':
            $bln_ini = "Mei";
            break;
        case 'Jun':
            $bln_ini = "Juni";
            break;
        case 'Jul':
            $bln_ini = "Juli";
            break;
        case 'Aug':
            $bln_ini = "Agustus";
            break;
        case 'Sep':
            $bln_ini = "September";
            break;
        case 'Oct':
            $bln_ini = "Oktober";
            break;
        case 'Nov':
            $bln_ini = "November";
            break;
        case 'Dec':
            $bln_ini = "Desember";
            break;
        default:
            # code...
            break;
    }

    if ($jam <= 10) {
        $ucapan = "Selamat Pagi";
    } elseif ($jam <= 14) {
        $ucapan = "Selamat Siang";
    } elseif ($jam <= 18) {
        $ucapan = "Selamat Sore";
    } else {
        $ucapan = "Selamat Malam";
    }
    ?>

    <ol>
        <li>
            <div style="border: 2px solid black;padding: 10px;">
                Hallo, <span style="color: red;"><?php echo "$ucapan"; ?>.....</span>
                <p>
                    Hari ini <span style="color: red;"><?php echo "$hari_ini, Tanggal $tgl $bln_ini $tahun";  ?></span>
                </p>
                Selamat ujian PHP
            </div>
        </li>

        <li style="margin-top: 25px;">
            <form action="#" method="post">
                <label for=nilai>Nilai Siswa : </label>
                <input type=text name=nilai id=nilai style="border: 3px solid black;padding: 10px;width: 50px ;box-shadow: 3px -3px gray;">
                <br><br>
                <button type="submit" style="padding: 10px;border: 3px solid black;background-color: grey;font-weight: bolder;">
                    Cek Nilai
                </button>
            </form>

            <?php
            $nilai_siswa = $_POST['nilai'];
            if ($nilai_siswa >= 85) {
                $nilai_huruf = "A";
                $Keterangan = "Lulus";
            } elseif ($nilai_siswa >= 70) {
                $nilai_huruf = "B";
                $Keterangan = "Lulus";
            } elseif ($nilai_siswa >= 60) {
                $nilai_huruf = "C";
                $Keterangan = "Cukup";
            } else {
                $nilai_huruf = "D";
                $Keterangan = "Gagal";
            }
            ?>

            <table style="border: none;">
                <tr>
                    <td>Nilai Angka</td>
                    <td>:</td>
                    <td><?php echo $nilai_siswa ?></td>
                </tr>
                <tr>
                    <td>Nilai Huruf</td>
                    <td>:</td>
                    <td><?php echo $nilai_huruf ?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?php echo $Keterangan ?></td>
                </tr>
            </table>
        </li>
    </ol>
</body>

</html>