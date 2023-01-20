<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for=upload>Select Image to Upload</label>
        <input type="file" name=fileToUpload id=upload>
        <button type="submit" name="submit">Upload Image</button>
    </form>
    <!--
    2022/12/17 
    Sat-Dec-22
    Saturday, 17-December-2022 / 14:30:21
    -->
    <!-- 
Beberapa aturan yang harus diikuti untuk formulir HTML di atas:
- Pastikan formulir menggunakan method="post"
- Formulir juga memerlukan atribut berikut: enctype="multipart/form-data". 
  Ini menentukan tipe konten mana yang akan digunakan saat mengirimkan formulir 
    -->
</body>

</html>