<?php include 'partials/header.php' ?>

<!-- header section starts -->
<?php include 'partials/navbar.php' ?>
<!-- header sectioon ends -->

<!-- hero section starts -->
<section class="hero" id="home">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Pesan Online</span>
                    <h3>Rendang</h3>
                    <a href="menu.php" class="btn">Lihat Menu</a>
                </div>
                <div class="image">
                    <img src="image/home-img-1-rendang.png" alt="" />
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Pesan Online</span>
                    <h3>Nasi Kuning</h3>
                    <a href="menu.php" class="btn">Lihat Menu</a>
                </div>
                <div class="image">
                    <img src="image/home-img-2-nasikuning.png" alt="" />
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Pesan Online</span>
                    <h3>Sate</h3>
                    <a href="menu.php" class="btn">Lihat Menu</a>
                </div>
                <div class="image">
                    <img src="image/home-img-3-sate.png" alt="" />
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- hero sectioon ends -->

<!-- category section starts -->
<section class="category">
    <h1 class="title">Kategori Makanan</h1>

    <div class="box-container">
        <a href="category.php" class="box">
            <img src="image/food-01.png" alt="" />
            <h3>Main Dishes</h3>
        </a>

        <a href="category.php" class="box">
            <img src="image/food-02.png" alt="" />
            <h3>Minuman</h3>
        </a>

        <a href="category.php" class="box">
            <img src="image/food-03.png" alt="" />
            <h3>Dessert</h3>
        </a>
    </div>
</section>
<!-- category sectioon ends -->

<!-- home products section starts -->
<section class="products">
    <h1 class="title">Menu Terbaru</h1>

    <div class="box-container">
        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-food-01.png" alt="" />
            <a href="#" class="cat">Main Dishes</a>
            <div class="nama">Bakso Solo 1</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 25K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-drink-01.png" alt="" />
            <a href="#" class="cat">Minuman</a>
            <div class="nama">Teh Talua 1</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 20K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-dessert-01.png" alt="" />
            <a href="#" class="cat">Dessert</a>
            <div class="nama">Kue lapis</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 20K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        
    </div>

    <div class="more-btn" id="about">
        <a href="menu.php" class="btn">Lihat semua</a>
    </div>
</section>
<!-- home products sectioon ends -->














<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<script>
    var swiper = new Swiper('.hero-slider', {
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>

</html>