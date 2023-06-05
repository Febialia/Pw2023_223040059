<?php include 'partials/header.php' ?>
<!-- navbar section starts -->
<?php include 'partials/navbar.php'; ?>
<!-- navbar sectioon ends -->




<div class="heading">
    <h3>Tentang Kami</h3>
    <p><a href="index.php">Home</a> <span> / Tentang</span></p>
</div>

<!-- about/tentang section stars -->
<section class="about">
    <div class="row">
        <div class="image">
            <img src="image/about-img.png" alt="" />
        </div>

        <div class="content">
            <h3>Mengapa Memilih Kami?</h3>
            <p>
                kami banyak menyediakan berbagai menu Tradisional Indonesia, tunggu apalagi yuk pesan sekarang klik menu dibawah ini.
            </p>
            <a href="menu.php" class="btn">Menu Kami</a>
        </div>
    </div>
</section>
<!-- about/tentang section ends -->

<!-- steps section stars -->
<section class="steps">
    <h1 class="title">Langkah-Langkah</h1>

    <div class="box-container">
        <div class="box">
            <img src="image/step-1.png" alt="" />
            <h3>Pilih Pesanan</h3>
            <p>pilih pesanan yang tersedia di menu halaman kami.</p>

        </div>

        <div class="box">
            <img src="image/step-2.png" alt="" />
            <h3>Pengiriman Cepat</h3>
            <p>pengantaran pengiriman cepat akan diantarkan langsung oleh kurir kami.</p>
        </div>

        <div class="box">
            <img src="image/step-3.png" alt="" />
            <h3>Selamat Menikmati</h3>
            <p>Selamat menikmati hidangan kami, terima kasih sudah orders.</p>
        </div>
    </div>
</section>

<!-- steps section ends -->



<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>