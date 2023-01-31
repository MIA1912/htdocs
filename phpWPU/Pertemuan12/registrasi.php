<?php if (isset($_POST['register'])) : ?>
    <?php
    require 'functions.php';
    if (registrasi($_POST) > 0) {
        echo "
        <script>
        alert('user baru berhasil di tambahkan')
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
    ?>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <fieldset>
            <legend>Registrasi</legend>
            <table>
                <tr>
                    <td>
                        <label for=username>username</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type=text name=username id=username>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=password>password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="password" name=password id=password>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=password2>konfirmasi password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type=password name=password2 id=password2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="register">Register !</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>