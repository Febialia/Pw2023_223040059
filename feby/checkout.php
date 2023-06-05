<?php include 'partials/header.php' ?>

<!-- header section starts -->
<?php include 'partials/navbar.php' ?>
<!-- header sectioon ends -->

<div class="heading">
    <h3>Checkout</h3>
    <p><a href="index.php">Home</a> <span> / Checkout</span></p>
</div>

<section class="checkout">
    <h1 class="title">Rincian Order</h1>

    <form action="" method="post">

        <div class="cart-items">
            <h3>Keranjang items</h3>
            <p><span class="name">Bakso Solo 1 </span> <span class="price"> IDR 25k</span></p>
            <p><span class="name">Cendol Dawet 2 </span> <span class="price"> IDR 15k</span></p>
            <p><span class="name">Bajigur 3 </span> <span class="price"> IDR 18k</span></p>
            <p class="grand-total"><span class="name">Total Pembayaran :</span><span>IDR 58k</span></p>
            <a href="page/cart.php" class="btn">Lihat Keranjang</a>
        </div>


        <div class="user-info">
            <h3>Your info</h3>
            <p><i class="fas fa-user"></i><span>Febi Alia Rahman</span></p>
            <p><i class="fas fa-phone"></i><span>+62838-7437-9818</span></p>
            <p><i class="fas fa-envelope"></i><span>Febialia149@gmail.com</span></p>
            <a href="user/update_profile.php" class="btn">Update Info</a>

            <select name="method" class="box" required>
                <option value="" disabled selected>Pilih metode pembayaran </option>
                <option value="cash on delivery">cash on delivery</option>
                <option value="credit card">credit card</option>
                <option value="paytm">paytm</option>
                <option value="paypal">paypal</option>
            </select>
            <input type="submit" value="buat pesanan" class="btn" style="width: 100%; background: var(--black); color:var(--white);">
        </div>



    </form>

</section>




<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>