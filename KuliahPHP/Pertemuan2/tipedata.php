<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
    <style>
        .content {
            display: grid;
            place-items: center;
        }

        table {
            border-collapse: collapse;
            width: fit-content;
        }

        td {
            border: 1px solid black;
            padding: 2px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="content">
        <table>
            <caption>Tipe Data</caption>
            <tr>
                <td colspan="3">
                    <h2>Tipe Data Pada PHP</h2>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <p>Contoh : </p>
                </td>
                <td>
                    <p>Keluaran :</p>

                </td>
            </tr>
            <tr>
                <td>String</td>
                <td>
                    <p>$a = "ini String";</p>
                </td>
                <td>
                    <p>
                        <?php
                        $a = "Ini String";
                        echo "\$a merupakan String dengan value : $a ";
                        ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>
                    <p>$a = 19;</p>
                </td>
                <td>
                    <?php
                    $a = 19;
                    echo "\$a merupakan Integer dengan value : $a";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td>
                    <p>$a = True;</p>
                    <p>$b = False;</p>
                </td>
                <td>
                    <?php
                    $a = true;
                    $b = false;

                    echo "\$a merupakan Boolean dengan value : $a" . "<br>";
                    echo "\$b merupakan Boolean dengan value : $b";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Float</td>
                <td>$a = 19.12;</td>
                <td>
                    <?php
                    $a = 19.12;
                    echo "\$a merupakan Float dengan value : $a";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Array</td>
                <td>$namalengkap = array("Muhammad","Ilham","Aulia")</td>
                <td>
                    <?php
                    $namalengkap = array("Muhammad", " Ilham", " Aulia");
                    echo "Nama Saya " . $namalengkap[0] . $namalengkap[1], $namalengkap[2]
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>