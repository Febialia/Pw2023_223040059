<?php
session_start();
require('php/connect.php');

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

if (isset($_POST['send'])) {
  if (contactus($_POST) > 0) {
    echo "<script>
    alert('Succes!');
    document.location.href = 'index.php';
    </script>";
  }
}
?>

<!-- header section -->
<?php
require_once('php/connect.php');

include 'partials/header.php'; ?>
<!-- header section -->

<!-- navbar -->
<?php include 'partials/navbar.php'; ?>
<!-- navbar -->

<!-- home section -->
<section id="home">
  <div class="content">
    <h3>Start Your Day With a <br> Cake as an appetizer</h3>
    <p>Get it with various attractive discounted prices
      <br>Check our website!
    </p>

  </div>
</section>

<!-- home section -->



<!-- about section -->
<div class="about" id="about">
  <div class="container">
    <div class="heading">About <span>Us</span></div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="./img/tiramisusu.webp" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <h3>What Makes Our Bakery Special?</h3>
        <p>The bread in our store is guaranteed to be hygienic, guaranteed to be cooked, and also tested halal.
          <br>We also offer a variety of brownie menus, there are also traditional cakes.
          <br>What are you waiting for, let's buy it now!

        </p>

      </div>
    </div>
  </div>
</div>
<!-- about section -->






<!-- top cards -->
<section class="top-cards">
  <div class="heading2">Top <span>Categories</span></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-6.jpg" alt="">

        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-7.jpg" alt="">

        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-8.jpg" alt="">

        </div>
      </div>
    </div>
  </div>
</section>
<!-- top cards -->






<!-- menu -->


<section class="menu" id="menu">
  <div class="container">
    <div class="heading3">Menu
      
    </div>
    
  </div>



  <div class="container" id="container2">
    <div class="row">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-1.jpg" alt="">
          <div class="card-body">

            <h3>Lapis Legit</h3>
            <p>IDR 50K <strike>IDR 75K</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-2.jpeg" alt="">
          <div class="card-body">

            <h3>French Bakery</h3>
            <p>IDR 45K <strike>IDR 50K</strike> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-3.jpg" alt="">
          <div class="card-body">

            <h3>Pie Susu</h3>
            <p>IDR 35 <strike>IDR 45</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-4.jpg" alt="">
          <div class="card-body">

            <h3>Bapia</h3>
            <p>IDR 20 <strike>IDR 40</strike> </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 50px;">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-5.jpg" alt="">
          <div class="card-body">

            <h3>Serabi</h3>
            <p>IDR 35 <strike>IDR 50</strike> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-6.jpg" alt="">
          <div class="card-body">

            <h3>Kue Buaya</h3>
            <p>IDR 175 <strike>IDR 250</strike> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-7.jpg" alt="">
          <div class="card-body">

            <h3>Cucur</h3>
            <p>IDR 15 <strike>IDR 20</strike> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./img/menu-8.jpg" alt="">
          <div class="card-body">

            <h3>Putu Ayu</h3>
            <p>IDR 5 <strike>IDR 10</strike> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- menu -->





<!-- our gallary -->
<div class="container" id="gallary">
  <h1>Our <span>Gallary</span></h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./img/menu-4.jpg" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./img/menu-1.jpg" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./img/menu-3.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./img/menu-8.jpg" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./img/menu-7.jpg" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./img/menu-6.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<!-- our gallary -->




<!-- contact -->
<section class="contact" id="contact">



  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="heading6">Contact <span>Us</span></div>

        <p>You need anything please contact us
        </p>
        <form action="" method="post">
          <input name="name" class="form-control" type="name" placeholder="Name" aria-label="default input example"><br>
          <input name="message" class="form-control" type="text" placeholder="Message" aria-label="default input example"><br>
          <input name="email" class="form-control" type="email" placeholder="Email" aria-label="default input example"><br>
          <input name="number" class="form-control" type="number" placeholder="Number" aria-label="default input example"><br>
          <button type="submit" name="send" id="contact-btn">Send Message</button>
        </form>
      </div>
      <div class="col-md-5" id="col">
        <h1>Info</h1>
        <p><i class="fa-regular fa-envelope"></i> febi.223040059@mail.unpas.ac.id</p>
        <p><i class="fa-solid fa-phone" href="https://wa.link/xmd7oo"></i> +62838-7437-9818</p>
        <p><i class="fa-solid fa-building-columns" href="https://goo.gl/maps/koVoYbKj2TfrUpkX8"></i> Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat.</p>
        <p>Open House
          <br>Weekday 08:00AM - 22:00 PM</br>
          Weekend 08:00AM - 23:00 PM
        </p>
      </div>
    </div>
  </div>

</section>
<!-- contact -->



<!-- footer -->
<?php include 'partials/footer.php'; ?>
<!-- footer -->


</body>

</html>