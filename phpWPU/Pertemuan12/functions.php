<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "ilham1912aulia", "phpdasar");
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    // cek apakah user pilih gambar baru atau tidak
    $gambar = htmlspecialchars($data['gambar']);
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    $query =
        "UPDATE
    mahasiswa
SET
    nama = '$nama',
    nrp = '$nrp',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
WHERE
    id = $id";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp =  htmlspecialchars($data["nrp"]);
    $email =    htmlspecialchars($data["email"]);
    $jurusan =  htmlspecialchars($data["jurusan"]);

    // jalankan function upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO
        mahasiswa (nama, nrp, email, jurusan, gambar)
        VALUES
        (
            '$nama',
            '$nrp',
            '$email',
            '$jurusan',
            '$gambar'
        );";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

    // query insert data
    // $query = "INSERT INTO
    //     mahasiswa (nama, nrp, email, jurusan, gambar)
    //     VALUES
    //     (
    //         '$nama',
    //         '$nrp',
    //         '$email',
    //         '$jurusan',
    //         '$gambar'
    //     );";
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
    WHERE 
    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $sizeFile =  $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    // * cek apakah tidak ada gambar yang di upload
    //! 4 artinya tidak ada gambar yang di upload
    if ($error === 4) {
        echo
        '<script>
        alert("pilih gambar terlebih dahulu")
        </script> ;';
        return false;
    }

    // * cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ["jpg", "png", "jpeg"];
    // explode adalah pemecah string menjadi array
    $ekstensiGambar = explode('.', $namaFile);
    // mengambil data di akhir, jika nama file photo.ilham.jpg
    $ekstensiGambar = strtolower(end($ekstensiGambarValid));


    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo
        "<script>
        alert('yang anda upload bukan gambar')
        </script> ;";
        return false;
    }

    if ($sizeFile > 1000000) {
        echo
        "<script>
        alert('ukuran gambar terlalu besar')
        </script> ;";
        return false;
    }

    // lolos pengecekan, gambar siap di jalankan

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, "../Gambar/" . $namaFileBaru);

    return $namaFileBaru;
}
