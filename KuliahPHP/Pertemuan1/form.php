<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .parentBox {
            display: grid;
            color: black;
        }

        .childBox {
            align-self: center;
            justify-self: center;
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
        }

        .childBox:hover {
            background-color: black;
            color: white;
            box-shadow: -1px 0px 15px 10px black;
        }

        .childBox:hover a {
            color: #fee6a8;
        }
    </style>
</head>

<body>
    <div class="parentBox">
        <div class="childBox">
            <p>
                Silahkan isi formulir data mahasiswa <a href="./latihan1input.php">Di sini</a>
            </p>
        </div>
    </div>
</body>

</html>