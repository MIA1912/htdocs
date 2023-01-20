<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasar</title>
</head>

<body>
    <?php
    $nama = @$_REQUEST['nama'];
    $email = @$_REQUEST['email'];

    if ($email !== 'ilhamaulia441@gmail.com') {
        die("Email tidak terdaftar");
    }

    echo "Selamat {$nama}, anda berhasil login!";
    ?>
    <!-- 
    Jadi fungsi $_REQUEST bisa mengambil data yang dikirim dengan metode:
    - GET
    - POST -->
</body>

</html>