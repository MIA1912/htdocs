<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memasukkan file php</title>
    <style>
        #require {
            color: red;
        }

        #include {
            color: blue;
        }
    </style>
</head>

<body>
    <!-- 
    Gunakan require saat file dibutuhkan oleh aplikasi.
    Gunakan include saat file tidak diperlukan dan aplikasi harus dilanjutkan saat file tidak ditemukan. 

    Jika file yang di-load ternyata tidak ada, perintah include akan tetap mengeksekusi baris kode program selanjutnya.
    Sedangkan jika file yang di-load dengan fungsi require ternyata tidak ada, maka ia akan berhenti di mana fungsi require tersebut dipanggil, 
    dan tidak melanjutkan pengeksekusian kode program berikutnya.
    -->

    <h1>Perkenalan</h1>
    <?php include '../phpdasar/1_Variable.php';
    echo "<br>";
    echo "Saya kuliah di $kuliah" . "<br>";
    echo "Saya mengambil prodi $prodi" . "<br>";
    echo "Tepat nya di kelas $kelas" . "<br>";

    ?>
    <!-- perbedaan require dan include -->
    <div id="include">
        <h1>Welcome to my home page!</h1>
        <?php include 'nofileExis.php';
        echo "I have a $color $car.";
        ?>
    </div>
    <div id="require">
        <h1>Welcome to my home page!</h1>
        <?php require 'noFileExis.php';
        echo "I have a $co.";
        ?>
    </div>s



    <!-- 
    Fungsi alternatif dari include dan require adalah: 
    include_once dan require_once.
    Dua fungsi tersebut hanya akan me-load file satu kali saja. 
    Artinya jika file tersebut sudah di-load sebelumnya, dia tidak akan di-load lagi di file yang sama. -->

</body>

</html>