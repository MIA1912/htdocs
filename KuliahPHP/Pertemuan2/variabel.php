<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Scope</title>
    <style>
        .content {
            display: grid;
            place-items: center;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;

        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="content">
        <table>
            <caption>Lingkup Variable</caption>
            <tr>
                <td colspan="3">
                    <h2>Lingkup Variable</h2>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Contoh :</td>
                <td>Keluaran :</td>
            </tr>
            <tr>
                <td>Global</td>
                <td>
                    <pre>
$x = 5;
$y = 10;

function fungsi() {
  global $x, $y;
  $y = $x + $y;
}

fungsi();
echo $y;


                    </pre>
                </td>
                <td>
                    <?php
                    $x = 5;
                    $y = 10;

                    function fungsi()
                    {
                        global $x, $y;
                        $y = $x + $y;
                    }

                    fungsi();
                    echo "nilai $y";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Static</td>
                <td>
                    <pre>
function fungsi1() {
  static $x = 0;
  echo $x;
  $x++;
}

fungsi1()
echo "< br >";
fungsi1();
echo "< br >";
fungsi1();
</pre>
                </td>
                <td>
                    <?php
                    function fungsi1()
                    {
                        static $x = 0;
                        echo $x;
                        $x++;
                    }

                    fungsi1();
                    echo "<br>";
                    fungsi1();
                    echo "<br>";
                    fungsi1();
                    ?>
                </td>
            </tr>
            <tr>
                <td>Local</td>
                <td>
                    <pre>
function fungsi2(){
    $a = 10; // local
    echo "nilai : $a";
}

fungsi2();
echo $a --> Ini Error
                    </pre>
                </td>
                <td>
                    <?php
                    function fungsi2()
                    {
                        $a = 10;
                        echo "nilai : $a";
                    }

                    fungsi2();
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>