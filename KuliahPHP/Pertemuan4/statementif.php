<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement IF</title>
</head>

<body>
    <form action="#" method="post">
        <ol>
            <h3>Tipe-Tipe Rekening</h3>
            <li>Personal</li>
            <li>Perusahaan Kecil</li>
            <li>Perusahaan Besar</li>
        </ol>
        <table>
            <caption>Cek Tipe Rekening</caption>
            <tr>
                <td>Type Rekening</td>
                <td>:</td>
                <td><input type="number" name="type" placeholder="input dengan angka di atas"></td>
            </tr>
        </table>
    </form>
    
    <?php
    $type = $_POST['type'];
    $rekening = array("Personal", "Perusahaan Kecil", "Perusahaan Besar");
    $biaya = array("Rp. 1000", "Rp. 1200", "Rp. 1400");

    if ($type == 1) {
        $rkn = $rekening[0];
        $bya = $biaya[0];
    }
    if ($type == 2) {
        $rkn = $rekening[1];
        $bya = $biaya[1];
    }
    if ($type == 2) {
        $rkn = $rekening[2];
        $bya = $biaya[2];
    }
    echo "<br>";
    echo "Tipe : <strong> $type </strong> <br>";
    echo "Rekening Langganan Air : <strong> $rkn</strong> <br>";
    echo "Biaya : <strong> $bya</strong>"
    ?>
</body>

</html>