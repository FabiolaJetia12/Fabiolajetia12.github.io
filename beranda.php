<?php
session_start();

if (!isset($_SESSION['is_login']) && !isset($_COOKIE['_logged'])) {
   
}
?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teras Tenun</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Feather -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style2.css" />
  </head>

  <body>
    <!-- Navbar Start-->
    <nav class="navbar">
      <a href="beranda.php" class="navbar-logo">Teras<span>Tenun</span>.</a>

      <div class="navbar-nav">
        <a href="beranda.php">Home</a>
        <a href="product.php">Product</a>
        <a href="about.php">About</a>
        <a href="contact.php">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="Shopping-bag"><i data-feather="shopping-bag"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End-->
   
    <!-- Page Start-->
    <section class="page" id="home">
      <main class="content">
        <h1>Welcome To Teras<span>Tenun</span></h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque,
          dolorum.
        </p>
      </main>
    </section>
    <!-- Page end-->

    <!-- Feather Icon-->
    <script>
      feather.replace();
    </script>

    <!-- Javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
