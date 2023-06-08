<?php
require('../php/connect.php');
include '../partials/header.php';
$contactus = query("SELECT * FROM contactus");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="fontawesome/all.js"></script>
  <link rel="stylesheet" href="style_admin.css">
</head>

<body style="margin-left: 300px;">
  <main>
    <section>
      <h1 style="margin-top: -140px;">Message User</h1>
      <br>

      <br>
     
      <table class="table">
        <thead>
          <tr>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
          </tr>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($contactus as $contactus) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $contactus["name"]; ?></td>
              <td><?= $contactus["email"]; ?></td>
              <td><?= $contactus["number"]; ?></td>
              
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>

    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fa fa-arrow-right" id="open"></i>
    </label>
    <div class="sidebar">
      <div class="top">
        Admin
      </div>

      <ul>

        <li><a class="#" href="../admin/category.php"><i class="fa fa-shopping-basket"></i> Category</a></li>
        <li><a class="#" href="../admin/products.php"><i class="fa fa-shopping-bag"></i> Products</a></li>
        <li><a class="#" href="../admin/user.php"><i class="fa fa-user-circle"></i>User</a></li>
        <li><a class="#" href="../admin/contactus.php"><i class="fa-solid fa-message"></i>Contact Us</a></li>
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