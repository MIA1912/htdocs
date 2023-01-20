<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
    <style>
        #parentBox {
            display: grid;
            background-color: #1d1c21;
        }

        #childBox {
            align-self: center;
            justify-self: center;
            box-shadow: -1px 0px 15px 10px #000;
        }

        @font-face {
            font-family: "Lato";
            src: url("G:\CSSwithW3School\Font\Lato\Lato-Regular.ttf");
        }

        @font-face {
            font-family: "cinzel";
            src: url("G:\CSSwithW3School\Font\Cinzel\Cinzel-VariableFont_wght.ttf");
        }

        h1,
        h2,
        h4 {
            font-family: "Lato";
        }

        td {
            font-family: "Lato";
            color: white;

        }

        table {
            width: fit-content;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: yellow;
            font-family: "cinzel";
        }

        h2 {
            text-transform: uppercase;
            font-family: "cinzel";
            color: white;

        }

        .button li {
            list-style: none;
            display: inline-block;
            padding: 10px;
        }

        input,
        option,
        select,
        textarea {
            background-color: #fee6a8;
            color: black;
            padding: 2px;
            outline: none;
            border: none;
        }

        input:focus,
        option:focus,
        select:focus,
        textarea:focus {
            background-color: #1d1c21;
            border-bottom: 1px solid white;
            color: white;
        }


        .button ul {
            text-align: center;
        }

        input[type="reset"] {
            padding: 10px 20px;
            color: red;
            text-transform: uppercase;
            transition: .5s;
            letter-spacing: 4px;
            border: 1px solid red;
            background-color: #1d1c21;
        }

        input[type="submit"] {
            padding: 10px 20px;
            color: green;
            text-transform: uppercase;
            transition: .5s;
            letter-spacing: 4px;
            border: 1px solid green;
            background-color: #1d1c21;

        }

        input[type="reset"]:hover {
            background: red;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 5px red, 0 0 25px red, 0 0 50px red, 0 0 100px red;
        }

        input[type="submit"]:hover {
            background: green;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 100px green;
        }
    </style>
</head>

<body>
    <div id="parentBox">
        <div id="childBox">
            <h1>Data Mahasiswa</h1>
            <form action="coba.php" method="post">
                <table>
                    <caption>
                        <h2>Input</h2>
                    </caption>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td class="border"><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="t_lahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jk">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="PRIA">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td>
                            <select name="asalsekolah">
                                <option value="SMA Negeri Pematang Siantar">SMA Negeri Pematang Siantar</option>
                                <option value="SMA Swasta Pematang Siantar">SMA Swasta Pematang Siantar</option>
                                <option value="SMA Negeri Simalungun">SMA Negeri Simalungun</option>
                                <option value="SMA Swasta Simalungun">SMA Swasta Simalungun </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Kesan Selama Kuliah Di ATB</td>
                        <td>:</td>
                        <td><textarea name="kesan" cols="20" rows="5"></textarea></td>
                    </tr>
                </table>
                <div class="button">
                    <ul>
                        <li><input type="reset" value="Reset" /></li>
                        <li><input type="submit" value="Submit" /></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>


    <?php
    include_once 'G:\CSSwithWPU\MembuatWeb\footer.html';
    ?>

</body>

</html>