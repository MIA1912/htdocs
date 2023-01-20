<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: "Lato";
            src: url("G:\CSSwithW3School\Font\Lato\Lato-Regular.ttf");
        }

        @font-face {
            font-family: "cinzel";
            src: url("G:\CSSwithW3School\Font\Cinzel\Cinzel-VariableFont_wght.ttf");
        }

        #parentBox {
            display: grid;
            background-color: #1d1c21;
            color: white;
        }

        #childBox {
            align-self: center;
            justify-self: center;
            box-shadow: -1px 0px 15px 10px black;

        }



        .embedded {
            width: 50%;
            float: left;
        }

        .no-embedded {
            width: 50%;
            float: left;
            border-left: 5px solid white;
        }

        @media screen and (max-width: 800px) {

            .embedded,
            .no-embedded {
                width: 100%;
                /* The width is 100%, when the viewport is 800px or smaller */
            }
        }


        * {
            font-family: "Lato";
        }

        h2,
        h4 {
            text-align: center;
            font-family: "cinzel";
        }


        h4:hover {
            color: #49573e;
        }



        table {
            width: fit-content;
            margin: auto;
        }

        .embedded table {
            border: none;
        }
    </style>
</head>

<body>
    <div id="parentBox">
        <div id="childBox">
            <h2>Output</h2>
            <div class="embedded">
                <table>
                    <caption>
                        <h4>From Embedded Script</h4>
                    </caption>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?php echo $_POST["nim"] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><?php echo $_POST["nama"] ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?php echo $_POST["t_lahir"] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <?php $new_date = date('d-m-Y', strtotime($_POST['tgl_lahir']));
                            echo $new_date ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $_POST["jk"] ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?php echo $_POST["agama"] ?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><?php echo $_POST["asalsekolah"] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $_POST["alamat"] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <div>Kesan Selama Kuliah</div>
                            <div>Di ATB</div>
                        </td>
                        <td>:</td>
                        <td><?php echo $_POST["kesan"] ?></td>
                    </tr>
                </table>
            </div>

            <div class="no-embedded">
            </div>

            <?php
            echo "<table >
            <caption>
            <h4>From No-Embedded Script</h4>
            </caption>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td>";
            echo $_POST["nim"];
            echo "</td>
    </tr>
    <tr>
        <td>Nama Siswa</td>
        <td>:</td>
        <td>";
            echo $_POST["nama"];
            echo "</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>";
            echo $_POST["t_lahir"];
            echo "</td>
    </tr>";
            echo "
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>";
            $new_date = date('d - F - Y', strtotime($_POST['tgl_lahir']));
            echo "<td>$new_date</td>";
            echo "
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>";
            echo $_POST["jk"];
            echo "</td>
            </tr>
        <tr>
        <td>Agama</td>
        <td>:</td>
        <td>";
            echo $_POST["agama"];
            echo "</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>";
            echo $_POST["asalsekolah"];
            echo "</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>";
            echo $_POST["alamat"];
            echo "</td>
    </tr>
    <tr>
        <td><pre>Kesan Selama Kuliah 
Di ATB</pre></td>
        <td>:</td>
        <td>";
            echo $_POST["kesan"];
            echo "</td>
    </tr>
    </table>
    "
            ?>
        </div>
    </div>
    </div>
    <?php
    include 'G:\CSSwithWPU\MembuatWeb\footer.html';
    ?>


</body>

</html>