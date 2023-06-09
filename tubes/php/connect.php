<?php
function koneksi()
{
  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'tubes_pw2023_223040059'
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


// ubah product //
function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $no = htmlspecialchars($data['no']);
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);



  $query = "UPDATE  
              products 
            SET
          
            no = '$no',
            gambar = '$gambar',
            nama ='$nama',
            harga = '$harga'
          
            
            WHERE id = '$id'
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


// hapus product //
function hapus($id)
{
  $conn = koneksi();
  $query = "DELETE FROM products WHERE id = $id ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


// cari data product //
function cari_data($data, $data2)
{
  $conn = koneksi();
  $query = "SELECT * FROM products WHERE nama LIKE'%$data%' AND category_id LIKE '%$data2%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


// tambah product //
function tambah($data)
{
  $conn = koneksi();

  $no = htmlspecialchars($data['no']);
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO
 products
 VALUES (null, '$no', '$gambar', '$nama', '$harga', '1') ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}



// ubah user //
function ubah_user($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $level = htmlspecialchars($data['level']);



  $query = "UPDATE  
              admin 
            SET
            name ='$nama',
            level = '$level'
            
            WHERE id = '$id'
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


// tambah user //
function tambah_user($data)
{
  $conn = koneksi();

  $name = htmlspecialchars($data['name']);
  $level = htmlspecialchars($data['level']);

  $query = "INSERT INTO
  admin
  VALUES (null, '$name', 'password', '$level') ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// hapus user //
function hapus_user($id)
{
  $conn = koneksi();
  $query = "DELETE FROM admin WHERE id = $id ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// cari user //
function cari_user($data, $data2)
{
  $conn = koneksi();
  $query = "SELECT * FROM admin WHERE name LIKE'%$data%' AND id LIKE '%$data2%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}



// menampilkan data contactus //
function contactus($data)
{
  $conn = Koneksi();
  $name = htmlspecialchars($data['name']);
  $email = htmlspecialchars($data['email']);
  $number = htmlspecialchars($data['number']);

  $query = "INSERT INTO
  contactus
  VALUES (null, '$name', '$email', '$number') ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
