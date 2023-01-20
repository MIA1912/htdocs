<style>
    .warning {
        background-color: red;
        padding: 10px;
        width: max-content;
        color: white;
    }
</style>

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
    $gambar = htmlspecialchars($data['gambar']);

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
    id = $id;";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = $data["nama"];
    $nrp = $data["nrp"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];


    if ($nama == "" || $nrp == "" || $gambar == "" || $email == "" || $jurusan == "") {
        echo
        '
        <h3 class="warning"> 
                Tolong masukkan data anda dengan lengkap !
        </h3>
        ';
    } else {
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
    }
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
