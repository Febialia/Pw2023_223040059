<?php include 'partials/header.php' ?>
<!-- navbar section starts -->
<?php include 'partials/navbar.php'; ?>
<!-- navbar sectioon ends -->

<div class="heading">
    <h3>Menu</h3>
    <p><a href="index.php">Home</a> <span> / Menu</span></p>
</div>

<!-- menu section starts -->
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

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-food-02.png" alt="" />
            <a href="#" class="cat">Dishes</a>
            <div class="nama">Nasi Goreng Ayam 2</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 20K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-drink-02.png" alt="" />
            <a href="#" class="cat">Drinks</a>
            <div class="nama">Cendol Dawet 2</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 15K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-dessert-02.png" alt="" />
            <a href="#" class="cat">Dessert</a>
            <div class="nama">Onde-Onde 2</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 20K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-food-03.png" alt="" />
            <a href="#" class="cat">Dishes</a>
            <div class="nama">Soto Lamongan 3</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 20K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-drink-03.png" alt="" />
            <a href="#" class="cat">Drinks</a>
            <div class="nama">Bajigur 3</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 18K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
            </div>
        </form>

        <form accept="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
            <img src="image/pro-dessert-03.png" alt="" />
            <a href="#" class="cat">Dessert</a>
            <div class="nama">Kue Kemplang</div>
            <div class="flex">
                <div class="price"><span>IDR </span> 20K</div>
                <input type="number" name="qty" class="qty" min="1" max="100" value="1" onkeypress="if(this.value.length == 2) return false" />
                <div class="more-btn" id="orders"></div>
            </div>


        </form>
    </div>


</section>
<!-- menu sectioon ends -->

<!-- footer section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer sectioon ends -->

<!-- custom js file link -->
<script src="js/script.js"></script>