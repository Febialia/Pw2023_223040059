<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="logo"><img src="./imag/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallary">Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>


      </ul>
      <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <?php
      // Periksa apakah ada input pencarian yang diberikan
      if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        // Lakukan operasi pencarian yang sesuai menggunakan keyword yang diberikan
        // Misalnya, Anda dapat menggunakan database atau melakukan pencarian dalam struktur data lainnya
        // Di sini, kita hanya mencetak pesan sederhana dengan kata kunci yang diberikan
        echo "Hasil Pencarian untuk: " . $keyword;
      }
      ?>



    </div>
  </div>
</nav>