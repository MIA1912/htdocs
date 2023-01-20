<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement IF ELSE</title>
</head>

<body>
    <form action="#" method="post">
        <table>
            <caption></caption>
            <tr>
                <td>Tanggal Lahir Ilham</td>
                <td>:</td>
                <td><input type="text" name="tgllhrmia"></td>
            </tr>
        </table>
    </form>
    <?php
    $tgl_lahir = $_POST("tgllhrmia");

    if ($tgl_lahir == 19) {
        echo "Benar, tanggal lahir ilham adalah : 19";
    } else {
        echo "Salah, tanggal $tgl_lahir bukan tanggal lahir ilham";
    }

    ?>
</body>

</html>