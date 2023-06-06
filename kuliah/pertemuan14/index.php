<?php
require('functions.php');
$name = 'Home';




// siapkan data $students

$students = query("SELECT * FROM mahasiswa");

// cari mahasiswa, ketika tombol search di klik
if(isset($_GET['search'])){
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
            mahasiswa 
            WHERE 
            nama like '%$keyword%' or
            nim like '%$keyword%' or
            email like '%$keyword%' or
            jurusan like '%$keyword%'
            ";
$students = query($query);
}


require('views/index.view.php');
