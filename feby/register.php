<?php
require('php/connect.php');

if (isset($_POST['submit'])) {
    $conn = koneksi();

    $name =     $_POST['name'];
    $password = $_POST['password'];
    $cpass = $_POST['confirm_password'];


    $sql = "SELECT * FROM `admin` WHERE `name` = '{$name}'";
    $user = query($sql);

    if (!count($user) > 0) {

        if ($password === $cpass) {

            $query = "INSERT INTO admin(name, password, level) VALUES ('$name', '$password', 'User')";

            mysqli_query($conn, $query) or die(mysqli_error($conn));

            header('Location: login.php');
        } else {
            header('Location: register.php');
        }
    } else {
        header('Location: register.php');
    }
}

?>

<?php include 'partials/header.php' ?>

<!-- navbar section starts -->
<?php include 'partials/navbar.php'; ?>
<!-- navbar sectioon ends -->

<section class="form-container">

    <form action="" method="post">
        <h3>Daftar Sekarang</h3>
        <input type="text" name="name" required placeholder="nama pengguna" class="box" maxlength="50">
        <input type="password" name="password" required placeholder="kata sandi" class="box" maxlength="10">
        <input type="password" name="cpass" required placeholder="konfirmasi kata sandi" class="box" maxlength="10">

        <input name="submit" type="submit" value="Masuk Sekarang" class="btn" id="btn">

        <p>sudah memiliki akun? <a href="login.php">masuk sekarang</a></p>

    </form>
</section>

<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>