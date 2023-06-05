<?php

require('php/connect.php');

session_start();
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $password = $_POST["password"];

    $conn = koneksi();
    $sql = "SELECT * FROM `admin` WHERE `name` = '$name' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $user = query($sql);
   
   
    if ($result) {
        echo 'Error: ' . mysqli_error($conn);
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (count($user) > 0) {
             $_SESSION['name'] = $name;

            if ($user[0]['level'] == 'Admin') {
                header('Location: admin/dashboard.php');
            } else {
                header('Location: index.php');
        }
    } else {
        header('Location: login.php');
    } 
    }
}


?>


<?php include 'partials/header.php' ?>
<!-- navbar section starts -->
<?php include 'partials/navbar.php'; ?>
<!-- navbar sectioon ends -->


<section class="form-container">

    <form action="" method="post">
        <h3>login sekarang</h3>
        <input type="text" placeholder="nama pengguna" required name="name" class="box" maxlength="50">
        <input type="password" placeholder="kata sandi" required name="password" class="box" maxlength="50">
        <input name="submit" type="submit" value="login sekarang" class="btn" id="btn">
        <p>tidak memiliki akun? <a href="register.php">Register sekarang</a></p>

    </form>
</section>



<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>