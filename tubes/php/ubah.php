<?php
require('../php/connect.php');
include '../partials/header.php';


$name = 'Ubah Data Product';
$id = htmlspecialchars($_GET['id']);
$product = query("SELECT * FROM products WHERE id ='$id'")[0];



if (isset($_POST['ubah'])) {

    if (ubah($_POST) > 0) {
        echo "<script>
    alert('ubah data berhasil!');
    document.location.href = '../admin/products.php';
    </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="fontawesome/all.js"></script>
    <link rel="stylesheet" href="../admin/style_admin.css">
</head>

<body >
    <main >
        <section>

            <div class="container mt-3" style="margin-left: 300px; ">
                <h1 style="margin-top: -200px;">Ubah products</h1>

                <div class="row">
                    <div class="col-md-8">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $product['id']; ?>">
                            <div class="mb-3 w-25">
                                <label for="nim" class="form-label">No</label>
                                <input type="text" class="form-control" name="no" id="no" maxlength="9" autofocus required value="<?= $product['no']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $product['gambar']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $product['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" value="<?= $product['harga']; ?>">
                            </div>

                            <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
                        </form>
                    </div>
                </div>

            </div>

        </section>

        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fa fa-arrow-right" id="open"></i>
        </label>
        <div class="sidebar" style="margin-top: 0px; color: #b2744c;">
            <div class="top">
                Admin
            </div>

            <ul >

                <li><a class="#" href="../admin/category.php"><i class="fa fa-shopping-basket"></i> Category</a></li>
                <li><a class="#" href="../admin/products.php"><i class="fa fa-shopping-bag"></i> Products</a></li>
                <li><a class="#" href="../admin/user.php"><i class="fa fa-user-circle"></i>User</a></li>
                <li><a class="#" href="../php/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg><span style="margin-left: 15px;">Logout</span> </a></li>
                <li></li>
            </ul>
        </div>

    </main>

</body>

</html>