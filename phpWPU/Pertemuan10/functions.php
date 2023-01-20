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
