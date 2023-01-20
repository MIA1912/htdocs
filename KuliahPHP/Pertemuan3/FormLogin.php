<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        input[type="reset"] {
            padding: 10px 20px;
            color: red;
            text-transform: uppercase;
            transition: .5s;
            letter-spacing: 4px;
            border: 1px solid red;
        }

        input[type="submit"] {
            padding: 10px 20px;
            color: green;
            text-transform: uppercase;
            transition: .5s;
            letter-spacing: 4px;
            border: 1px solid green;
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

        .button li {
            list-style: none;
            display: inline-block;
            padding: 10px;
        }

        .button ul {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="hasillogin.php" method="post">
        <table>
            <caption>Login</caption>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="ps"></td>
            </tr>
        </table>
        <div class="button">
            <ul>
                <li><input type="submit" value="Submit" /></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </div>
    </form>
</body>

</html>