<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
    <style>
        th {
            color: red;
        }

        table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
        }

        td,
        th {
            padding: 10px;
        }

        td:nth-child(even) {
            text-align: left;
        }

        table {
            border-collapse: collapse;
            margin: 10px auto 10px auto;
        }

        .syarat {
            list-style-type: lower-alpha;
        }

        ol.gambar li {
            display: inline;
            list-style-type: none;
        }

        .satu strong {
            visibility: hidden;
        }

        .satu input[type="submit"]:hover~strong {
            visibility: visible;
        }

        .jawaban {
            box-sizing: border-box;
            margin: auto;
            width: fit-content;
        }
    </style>

</head>

<body>
    <h4>Soal Praktikum Web</h4>
    <ol>
        <li>Buat program untuk menampilkan n bilangan genap atau ganjil dengan syarat berikut:
            <ol class="syarat">
                <li>n : diinputkan oleh user</li>
                <li>genap atau ganjil : diinputkan oleh user</li>
                <li>Jika genap: bukan kelipatan 6 dan 8</li>
                <li>Jika ganjil : bukan kelipatan 3 dan 7</li>
                <li>Kurang dari 50</li>
            </ol>
            <p>
                <strong>
                    Contoh Output:
                    <span style="display: block;">
                        Jika n = 4 dan bilangan genap &#8594; 2, 4, 10, 14
                    </span>
                </strong>
            </p>
            <div class="jawaban">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Program</legend>
                        <label for=angka>Masukkan Angka : </label>
                        <input type="number" name=angka id=angka>
                        <input type="submit" value="Cari" name="submit1">
                        <br>
                        <?php if (isset($_POST["submit1"])) : ?>
                            <?php $angka = $_POST['angka']; ?>
                            <strong>Jika n = <?= $angka ?> dan bilangan genap &#8594;

                                <?php
                                if ($angka % 2 == 0) {
                                    for ($i = 1; $i < 50; $i++) {
                                        if ($i % 2 == 0) {
                                            if (($i % 6 == 0) || ($i % 8 == 0)) {
                                                continue;
                                            }
                                            echo "$i, ";
                                        }
                                    }
                                } else {
                                    for ($j = 1; $j < 50; $j++) {
                                        if (($j % 2 == 0) || ($j % 3 == 0) || ($j % 7 == 0)) {
                                            continue;
                                        }
                                        echo "$j, ";
                                    }
                                }
                                ?>
                            <?php endif ?>
                            </strong>
                    </fieldset>
                </form>
            </div>
        </li>
        <br>
        <li>
            Terdapat data mahasiswa sebagai berikut:
            <table>
                <tr>
                    <th>NIM</th>
                    <th>Gambar yang tampil</th>
                </tr>
                <tr>
                    <td>202101030007</td>
                    <td>3 jenis mobil</td>
                </tr>
                <tr>
                    <td>202101030008</td>
                    <td>3 jenis sepeda motor</td>
                </tr>
                <tr>
                    <td>202101030009</td>
                    <td>3 jenis smartphone</td>
                </tr>
            </table>
            Buat program untuk menampilkan gambar secara random, dengan syarat:
            <ol class=" syarat">
                <li>Input : NIM</li>
                <li>Output : gambar secara random</li>
            </ol>
            <br>
            <div class="jawaban">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Program</legend>
                        <label for=nim>NIM : </label>
                        <input type="number" name=nim id=nim>
                        <input type="submit" value="tampil" name="submit2">
                        <?php if (isset($_POST['submit'])) : ?>
                            <?php
                            $nim = $_POST['nim'];
                            if ($nim == "202101030007") {
                                $gambar = "https://source.unsplash.com/150x150?car";
                            } elseif ($nim == "202101030008") {
                                $gambar = "https://source.unsplash.com/150x150?motorcycle";
                            } elseif ($nim == "202101030009") {
                                $gambar = "https://source.unsplash.com/150x150?smartphone";
                            } else {
                                $gambar = "#";
                            }
                            ?>
                            <table>
                                <tr>
                                    <th>NIM</th>
                                    <th>Gambar yang tampil</th>
                                </tr>
                                <tr>
                                    <td><?= $nim  ?></td>
                                    <td>
                                        <ol style="list-style-type:none;" class="gambar">
                                            <li><img src="<?= $gambar; ?>"></li>
                                            <li><img src="<?= $gambar; ?>"></li>
                                            <li><img src="<?= $gambar; ?>"></li>
                                        </ol>
                                    </td>
                                </tr>
                            </table>
                        <?php endif; ?>
                    </fieldset>
                </form>
            </div>
        </li>
    </ol>

</body>

</html>