<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    date_default_timezone_set('Asia/Jakarta'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        div {
            box-sizing: border-box;
            width: max-content;
        }

        input {
            margin: 10px;
        }

        button {
            display: flex;
            margin: auto;
            align-items: center;
        }
    </style>
</head>

<body>
    <div>
        <form action="hasillogin.php" method="post">
            <label for=nama>Nama : </label>
            <input type=text name=nama id=nama>
            <br>
            <label for=email>Email : </label>
            <input type="email" name=email id=email>
            <br>
            <button type="submit" name="submit">Enter!</button>
        </form>
        <!-- <?php
                if (isset($_POST['submit'])) : ?>
            <?php
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
            ?>
            
        <?php endif ?> -->
    </div>
</body>

</html>