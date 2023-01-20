<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
</head>

<body>
    <?php

    $id = $_POST['id'];
    $ps = $_POST['ps'];
    if ($id == "ilham19" && $ps == "@ulia12345") {
        echo "Selamat datang  $id <br>";
        // echo '<script> window.alert("Anda Berhasil Login")</script>';
        print 'silahkan klik link ini <a href="FormGaji.php">form penggajian</a>';
    } else {
        echo "Mohon maaf, anda tidak dapat login <br>";
        echo '<a href="FormLogin.php">form login</a>';
    }

    ?>

</body>

</html>