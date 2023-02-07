<?php
require_once 'functions.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");


    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <div style="color: red;">
            Mohon maaf, username atau password anda ada yang salah
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>
                        <label for=username>Username</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type=text name=username id=username>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=password>Password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type=text name=password id=password>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="login">Login!</button></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>