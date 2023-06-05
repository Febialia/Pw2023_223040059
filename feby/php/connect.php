<?php
function koneksi()
{
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'tubes_pw2023';

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die('KONEKSI KE DATABASE GAGAL: ' . mysqli_connect_error());
    }

    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
