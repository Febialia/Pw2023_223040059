<?php
function koneksi()
{
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'tubes_pw2023';

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die('KONEKSI KE DATABASE GAGAL: ' . mysqli_connect_error());
    }

    return $conn;
}


function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
} 
?>

<?php include 'partials/header.php' ?>

<!-- header section starts -->
<?php include 'partials/navbar.php' ?>
<!-- header sectioon ends -->


<div class="heading">
    <h3>Contact Kami</h3>
    <p><a href="index.php">Home</a> <span> / Contact</span></p>
</div>


<!-- Contact section starts -->
<section class="contact">
    <div class="row">
        <div class="image">
            <img src="image/contact-img.png" alt="" />
        </div>

        <form action="" method="post">
            <h3>Beritahu kami</h3>
            <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required />
            <input type="number" name="number" min="0" max="999999999999999" class="box" placeholder="enter your number" required onkeypress="if (this.value.length == 10) return false;" />
            <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required />
            <textarea name="msg" class="box" required placeholder="enter your massage" maxlength="500" cols="30" rows="10"></textarea>
            <input type="submit" value="send massage" name="send" class="btn" />
        </form>
    </div>
</section>
<!-- Contact section ends -->




<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>