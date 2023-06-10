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
  $gambar = upload();
  if (!$gambar) {
    $gambar = $data['gambar-lama'];
  }
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);



  $query = "UPDATE  
              products 
            SET

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

 
  $gambar = upload();
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO
 products
 VALUES (null, '$gambar', '$nama', '$harga', '1') ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// upload foto //
function upload()
{
  $name_file = $_FILES['gambar']['name'];
  $type_file = $_FILES['gambar']['type'];
  $size_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // check file existence
  if ($error == 4) {
    return false;
  }

  // chect name file
  $list_type = ['jpg', 'jpeg', 'png'];
  $file_extension = explode('.', $name_file);
  $file_extension = strtolower(end($file_extension));
  if (!in_array($file_extension, $list_type)) {
    return false;
  }

  // check type file
  if ($type_file != 'image/jpeg' && $type_file != 'image/png') {
    return false;
  }

  // check size file
  // 5mb
  if ($size_file > 5000000) {
    return false;
  }

  // ready for upload
  // generate new name file
  $new_name_file = uniqid();
  $new_name_file .= '.';
  $new_name_file .= $file_extension;
  move_uploaded_file($tmp_file, '../img/upload/' . $new_name_file);

  return $new_name_file;
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




// menampilkan data contactus //
function contactus($data)
{
  $conn = Koneksi();
  $name = htmlspecialchars($data['name']);
  $message = htmlspecialchars($data['message']);
  $email = htmlspecialchars($data['email']);
  $number = htmlspecialchars($data['number']);

  $query = "INSERT INTO
  contactus
  VALUES (null, '$name', '$message', '$email', '$number') ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
