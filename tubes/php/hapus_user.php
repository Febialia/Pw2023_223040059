<?php
require('../php/connect.php');


$id = htmlspecialchars($_GET['id']);

if (hapus_user($id) > 0) {
    echo "<script>
    alert('data deleted successfully!');
    document.location.href = '../admin/user.php';
    </script>";
} else {
    echo "<script>
    alert('data falied to deleted!');
    document.location.href = '../admin/user.php';
    </script>";
}