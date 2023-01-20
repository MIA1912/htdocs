<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan</title>
    <style>
        input[type="number"] {
            background-color: gray;
        }

        table,
        td {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="operation.php" method="post"></form>
    <table>
        <tr>
            <td>Bilangan 1 : </td>
            <td><input type="number" name="bil1"></td>
        </tr>
        <tr>
            <td>Bilangan 2 :</td>
            <td><input type="number" name="bil2"></td>
        </tr>
    </table>
    <input type="submit" value="Hitung">

</body>

</html>