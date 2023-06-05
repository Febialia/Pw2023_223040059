<?php
require('../php/connect.php');


$id = htmlspecialchars($_GET['id']);

if (hapus($id) > 0) {
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href = '../admin/products.php';
    </script>";
} else {
    echo "<script>
    alert('data gagal dihapus!');
    document.location.href = '../admin/products.php';
    </script>";
}