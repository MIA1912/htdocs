<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
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

        h1,
        h3 {
            text-align: center;
        }

        ul {
            list-style: none;
            padding-left: 15px;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        $a = 18;
        $b = 8;
        $c = 2;
        ?>
        <table>
            <caption>OPERATOR</caption>
            <tr>
                <th colspan="2">
                    <h1>Operator</h1>
                </th>
            </tr>
            <tr>
                <td>Diketahui</td>
                <td>
                    <ul>
                        <li>$a = 18</li>
                        <li>$b = 8</li>
                        <li>$c = 2</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Operator Aritmatika</h3>
                    <ul>
                        <li>$a + $b</li>
                        <li>$a - $b</li>
                        <li>$b x $c</li>
                        <li>$b / $c</li>
                        <li>%a mod $c</li>
                    </ul>
                </td>
                <td>
                    <h3>Hasil</h3>
                    <ul>
                        <li><?php echo $a + $b  ?></li>
                        <li><?php echo $a - $b  ?></li>
                        <li><?php echo $b * $c  ?></li>
                        <li><?php echo $b / $c  ?></li>
                        <li><?php echo $a % $c  ?></li>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Operator Logika</h3>
                    <ul>
                        <li>($a > $b) && ($b > $c)</li>
                        <li>($a < $b) and ($b> $c)</li>
                        <li>($a > $b) || ($b < $c)</li>
                        <li>($a < $b) or ($b < $c)</li>
                        <li>(Not($a < $b)</li>
                    </ul>
                </td>
                <td>
                    <h3>Hasil</h3>
                    <ul>
                        <li><?php echo ($a > $b) && ($b > $c)   ?></li>
                        <li><?php
                            if (($a < $b) && ($b > $c)) {
                                echo "1";
                            } else {
                                echo "0";
                            }
                            ?>
                        </li>
                        <li><?php echo ($a > $b) || ($b < $c)  ?></li>
                        <li><?php
                            if (($a < $b) || ($b < $c)) {
                                echo "1";
                            } else {
                                echo "0";
                            }
                            ?></li>
                        <li><?php echo !($a < $b)  ?></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Operator Perbandingan / Relasi</h3>
                    <ul>
                        <li>($a == $b)</li>
                        <li>($a != $b)</li>
                        <li>($a > $c)</li>
                        <li>($a >= $c)</li>
                        <li>($b < $c)</li>
                        <li>($b < $c)</li>
                        <li>($a === $b)</li>
                        <li>($b !== $c)</li>
                    </ul>
                </td>
                <td>
                    <h3>Hasil</h3>
                    <ul>
                        <li><?php
                            if ($a == $b) {
                                echo "1";
                            } else {
                                echo "0";
                            }
                            ?></li>
                        <li><?php echo $a != $b ?></li>
                        <li><?php echo $a > $c ?></li>
                        <li><?php echo $a >= $b ?></li>
                        <li><?php
                            if ($b < $c) {
                                echo "1";
                            } else {
                                echo "0";
                            } ?></li>
                        <li><?php
                            if ($b <= $c) {
                                echo "1";
                            } else {
                                echo "0";
                            } ?></li>
                        <li><?php
                            if ($a === $b) {
                                echo "1";
                            } else {
                                echo "0";
                            } ?></li>
                        <li><?php echo $b !== $c ?></li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
    <?php

    printf("18 + 8 = %d ", $a + $b);
    echo "<br>";
    printf("8 - 2 = %d", $b - $c);
    echo "<br>";
    printf("2 x 8 = %d", $c * $b);
    echo "<br>";
    printf("8 / 12 = %f", $b / $a);
    echo "<br>";
    printf("18 mod 2 = %d", $a % $c);
    echo "<br>";
    ?>
</body>

</html>