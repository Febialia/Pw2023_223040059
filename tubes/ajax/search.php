<?php
require('../php/connect.php');
include '../partials/header.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
            products 
            WHERE 
            nama like '%$keyword%' 
            ";
$product = query($query);
?>

<?php if ($product) : ?>
<?php $i = 1;
foreach ($product as $product) : ?>
  <tr>
    <th scope="row"><?= $i++; ?></th>
    <td><img src="../img/<?= $product["gambar"]; ?>" width="45" height="45" style="object-fit: cover;" class="rounded-circle"></td>

    <td><?= $product["nama"]; ?></td>
    <td><?= $product["harga"]; ?></td>
    <td style="font-size: 25px;">
      <a href="../php/tambah.php?id=<?= $product['id']; ?>" onclick="return confirm ('Add?')" style="color:green;"><i class="fas fa-plus-circle"></i></a> |
      <a href="../php/ubah.php?id=<?= $product['id']; ?>" onclick="return confirm ('edit product!')"><i class="fas fa-edit"></i></a> |
      <a href="../php/hapus.php?id=<?= $product['id']; ?>" onclick="return confirm ('Delate?') " style="color:red;"><i class="fas fa-trash-alt"></i></a>
    </td>
  </tr>
<?php endforeach; ?>

<?php else : ?>
<div class="row">
  <div class="col-md-6">
    <div class="alert alert-danger" role="alert">
      product not found!
    </div>
  </div>
</div>

<?php endif; ?>