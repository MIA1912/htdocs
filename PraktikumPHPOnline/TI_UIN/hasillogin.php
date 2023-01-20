<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    if ($nama == "" || $email == "") : ?>
        <div>
            Mohon maaf data anda ada yang tidak lengkap
        </div>
        <div>
            Tolong lengkapi data anda di <a href="login.php">Disini.</a>
        </div>
    <?php
    else :
    ?>
        <h1>Assalamu'alaikum</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama;  ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?php echo date("r") ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>

</html>