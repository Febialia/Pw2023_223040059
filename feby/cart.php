<?php include 'partials/header.php' ?>

<!-- header section starts -->
<?php include 'partials/navbar.php' ?>
<!-- header sectioon ends -->


<div class="heading">
    <h3>Keranjang Shopping</h3>
    <p><a href="index.php">Home</a> <span> / Keranjang</span></p>
</div>



<!-- Shopping Cart section starts -->
<section class="products">
    <h1 class="title">Keranjang Saya</h1>

    <div class="cart-total">
        <p>Cart Total : <span>IDR 40K</span></p>
        <a href="checkout.php" class="btn">Proceed to checkout</a>
    </div>

    <div class="box-container">
        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-times" name="delete" onclick="return confirm('delete this item?');"></button>
            <img src="image/pro-food-01.png" alt="" />
            <div class="nama">Bakso Solo 1</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 25K</div>
                <input type="number" name="qty" class="qty" min="0" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
                <button type="submit" class="fas fa-edit"></button>
            </div>
            <div class="sub-total">sub total : <span> IDR 20k</span></div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-times" name="delete" onclick="return confirm('delete this item?');"></button>
            <img src="image/pro-drink-02.png" alt="" />
            <div class="nama">Cendol Dawet 2</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 15K</div>
                <input type="number" name="qty" class="qty" min="0" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
                <button type="submit" class="fas fa-edit"></button>
            </div>
            <div class="sub-total">sub total : <span> IDR 10k</span></div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-times" name="delete" onclick="return confirm('delete this item?');"></button>
            <img src="image/pro-drink-03.png" alt="" />
            <div class="nama">Bajigur 3</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 18K</div>
                <input type="number" name="qty" class="qty" min="0" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
                <button type="submit" class="fas fa-edit"></button>
            </div>
            <div class="sub-total">sub total : <span> IDR 10k</span></div>
        </form>
    </div>

    <div class="more-btn">
        <form action="" method="post">
            <button type="submit" class="delete-btn" name="delete_all" onclick="return confirm('delete all from cart?');">
                Hapus semua
            </button>
        </form>
    </div>
</section>
<!-- Shopping Cart sectioon ends -->




<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>