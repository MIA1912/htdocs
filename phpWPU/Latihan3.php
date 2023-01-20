<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <?php
    // input type submit nya harus di kasih name biar bisa di panggil di isset()
    if (isset($_POST["submit"])) : ?>
        <h1>Assalamua'alaikum <?php $nama1 = $_POST['nama'];
                                // echo $nama1;     -> Bisa pakai ini untuk outputnya
                                ?>
            <?= $nama1; ?></h1>
    <?php endif ?>
    <form action="#" method="post">
        <label for="name">
            Masukkan Nama :
        </label>
        <input type="text" id="name" name="nama">
        <br>
        <!-- Gunakan Button -->
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>