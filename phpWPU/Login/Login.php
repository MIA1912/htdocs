<!DOCTYPE html>
<html lang="en">

<?php if (isset($_POST["submit"])) {
  if ($_POST["nama"] == "ilham" && $_POST["pass"] == "@ulia12345") {
    header("Location: Admin.php");
    exit;
  } else {
    $error = true;
  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <style>
    .parentbox {
      display: flex;
      justify-content: center;
    }

    .childbox {
      align-self: center;
    }

    li {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="parentbox">
    <div class="childbox">
      <h1 style="text-align: center;">
        Silahkan Login
      </h1>
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">
          Username / Password salah !!!
        </p>
      <?php endif ?>
      <form action="" method="post">
        <ul>
          <li>
            <label for=nama>Username :</label>
            <input type=text name=nama id=nama>
          </li>
          <li>
            <label for=pass>Password : </label>
            <input type="password" name=pass id=pass>
          </li>
          <li>
            <button type="submit" name="submit">Klik!</button>
          </li>
        </ul>
      </form>
    </div>
  </div>
</body>

</html>
