<?php
require('php/connect.php');

if (isset($_POST['submit'])) {
    $conn = koneksi();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Query untuk memperbarui data pengguna
    $query = "UPDATE admin SET name='$name', password='$password' WHERE id=$id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    header('Location: admin.php');
}

// Mendapatkan data pengguna berdasarkan ID
if (isset($_GET['id'])) {
    $conn = koneksi();

    $id = $_GET['id'];
    $query = "SELECT * FROM admin WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
}
?>

<!-- Form untuk mengubah data pengguna -->
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <input type="text" name="name" value="<?= $user['name']; ?>" required>
    <input type="password" name="password" value="<?= $user['password']; ?>" required>
    <input type="submit" name="submit" value="Simpan Perubahan">
</form>



<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header sectioon ends -->

<!-- navbar section starts -->
<?php include 'partials/navbar.php'; ?>
<!-- navbar sectioon ends -->


<section class="form-container">
  
  <form action="" method="post">
    <h3>Ubah Profil</h3>
    <input type="text" name="name" required placeholder="nama pengguna" class="box" maxlength="50">
    <input type="password" name="pass" placeholder="kata sandi lama" 
    class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g,'')">
    <input type="password" name="pass" placeholder="kata sandi baru" 
    class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g,'')">
    <input type="password" name="cpass" placeholder="konfirmasi kata sandi" 
    class="box" maxlength="10" oninput="this.value = this.value.replace(/\s/g,'')">
    
    <input type="submit" value="Ubah data" class="btn">

  </form>
</section>

<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>

