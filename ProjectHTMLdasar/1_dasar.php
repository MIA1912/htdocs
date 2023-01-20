<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dasar Input</title>
</head>

<body>
  <form action="dasar.php" method="post">
    <fieldset>
      <legend>Test Kirim</legend>
      <p>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" />
      </p>
      <p>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" placeholder="Email Aktif" />
      </p>
      <p>
        <input type="submit" value="kirim" />
      </p>
    </fieldset>
  </form>
</body>

</html>