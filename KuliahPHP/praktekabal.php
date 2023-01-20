<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progam Mencari Bil Ganjil dan Genap</title>
</head>

<body>
    <h1 style="text-align: center;">Program Perhitungan</h1>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Input Angka</td>
                <td>:</td>
                <td>
                    <input type="number" name="angka1">
                </td>
                <td>
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td>
                <td>
                    <input type="number" name="angka2">
                </td>
                <td>
                    <input type="submit" value="Hitung" name="hitung">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['hitung'])) :
    ?>
        <?php
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $tambah = $angka1 + $angka2;
        $kurang = $angka1 - $angka2;
        $kali = $angka1 * $angka2;
        $bagi = $angka1 / $angka2;
        if ($operator == "Pilih Salah Satu !") {
            echo "Maaf Anda Tidak Memilih Operator..!";
        } elseif ($operator == "+") {
            $hitung = $tambah;
        } elseif ($operator == "-") {
            $hitung = $kurang;
        } elseif ($operator == "/") {
            $hitung = $bagi;
        } elseif ($operator == "*") {
            $hitung = $kali;
        }
        ?>
        <div>
            Hasilnya adalah = <?php echo $hitung ?>
        </div>
    <?php endif;  ?>
</body>

</html>

<!-- 
    Membuat program penjumlahan dan pengurangan dengan + - di tulis di input
 -->