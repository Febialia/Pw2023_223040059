<?php
require('php/connect.php');

if (isset($_GET['search_box'])) {
  $search_box = $_GET['search_box'];
  // Lakukan proses pencarian menggunakan nilai $keyword
  // Misalnya, melakukan query ke database dengan kata kunci pencarian
  // dan menampilkan hasil pencarian
  $sql = "SELECT * FROM `admin` WHERE `name` LIKE '%$search_box%'";
  $results = query($sql);

  // ...
  if (count($results) > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Password</th></tr>";
    foreach ($results as $result) {
      echo "<tr>";
      echo "<td>{$result['name']}</td>";
      echo "<td>{$result['password']}</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "Tidak ada hasil pencarian.";
  }
  // ...

}

?>

<?php include 'partials/header.php' ?>

<!-- header section starts -->
<?php include 'partials/navbar.php' ?>
<!-- header sectioon ends -->

<div class="heading">
  <h3>Cari </h3>
  <p><a href="index.php">Home</a> <span> / Cari</span></p>
</div>

<!-- search section starts -->
<section class="search-form">
  <form method="post" action="search.php">
    <input type="text" name="search-box" placeholder="Cari menu..." class="box">
    <button type="submit" name="search_btn" class="fa-solid fa-magnifying-glass"></button>
  </form>
</section>
<!-- search sectioon ends -->

<!-- search products section starts -->
<section class="products" style="min-height: 100vh; padding-top: 0;"></section>
<!-- search products sectioon ends -->


<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<!-- custom js file link -->
<script src="js/script.js"></script>