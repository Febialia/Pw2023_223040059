<?php
function koneksi()
{
  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'swiss_collection'
  ) or die('KONEKSI KE DATABASE GAGAL!');
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

