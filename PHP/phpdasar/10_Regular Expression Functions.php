<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression Functions</title>
</head>

<body>
    <!-- $exp = "/w3schools/i";
    $exp = variable
    w3schools = yang mau di cari
    / = untuk pembatas, ada juga # or ~ jika text kita ada "/"
    i = untuk membuat pencarian tidak peka huruf besar or kecil -->
    <?php
    $nama = "Muhammad Ilham Aulia";
    $nama2 = "/ilham/i";
    echo preg_match($nama2, $nama) . "<br>"; // return 1 jika jumpa dan 0 jika sebaliknya
    $nama2 = "/i/i";
    echo preg_match_all($nama2, $nama) . "<br>"; // return 2
    $nama3 = "/aulia/i";
    echo str_replace($nama3, "Fajar", $nama) . "<br>"; // ganti kata
    // i = case-insensitive search
    // m = melakukan pencarian multiline
    // u = enable correct matching of UTF-8 encoded patterns
    $pattern = "/am[ia]n/";
    $tekx = "saya amin kamu aman.";
    if (preg_match($pattern, $tekx)) {
        echo "Ditemukan"; // return this
    } else {
        echo "Tidak ditemukan";
    }
    echo "<br>";
    $pattern = "/mu[^l]ai/";
    $tekx = "saya mulai pelihara burung murai.";
    if (preg_match($pattern, $tekx)) {
        echo "Ditemukan"; // return this
    } else {
        echo "Tidak ditemukan";
    }
    echo "<br>";
    $my_email = "nama@perusahaan.com";
    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email)) {
        echo "$my_email adalah alamat email yang valid";
    } else {
        echo "$my_email BUKAN alamat email yang valid";
    }

    // Menjelaskan pola “[/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/] "
    // DI SINI,

    // "'/.../'" memulai dan mengakhiri ekspresi reguler
    // “^[a-zA-Z0-9._-]” cocok dengan huruf kecil atau besar, angka antara 0 dan 9 dan titik, garis bawah, atau tanda hubung.
    // “+@[a-zA-Z0-9-]” cocok dengan simbol @ diikuti dengan huruf kecil atau besar, angka antara 0 dan 9 atau tanda hubung.
    // “+\.[a-zA-Z.]{2,5}$/” keluar dari titik menggunakan garis miring terbalik kemudian mencocokkan huruf kecil atau besar dengan panjang karakter antara 2 dan 5 di akhir string.

    // https://www.tutorialrepublic.com/php-tutorial/php-regular-expressions.php
    // https://www.guru99.com/php-regular-expressions.html
    ?>
</body>

</html>