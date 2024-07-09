<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .showcase {
            min-height: 400px;
            background: url('showcase.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }
        .content {
            padding: 20px;
            background: #fff;
            margin: 20px auto;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            text-align: center;
            color: #333;
        }
        .content p {
            text-align: justify;
            color: #666;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
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

    <section class="showcase">
        <div>
            <h1>About Us</h1>
        </div>
    </section>

    <section class="content">
        <h2>Our Story</h2>
        <p>Teras Tenun adalah usaha merchandise yang berdedikasi untuk merajut kebudayaan Indonesia. Kami berkomitmen untuk menghadirkan produk-produk berkualitas yang terinspirasi dari kekayaan budaya tenun Indonesia. Melalui usaha ini, kami berharap dapat memperkenalkan dan melestarikan warisan budaya kita kepada dunia.</p>
        
        <h2>Our Mission</h2>
        <p>Visi kami adalah menjadi pemimpin dalam industri merchandise berbasis budaya di Indonesia. Misi kami adalah memberikan produk yang unik dan berkualitas tinggi yang mencerminkan kekayaan budaya kita, serta mendukung para perajin lokal dengan memberikan mereka platform untuk memasarkan karya mereka.</p>
        
        <h2>Meet the Team</h2>
        <p>Tim kami terdiri dari individu-individu yang bersemangat dan berdedikasi dalam bidang desain, produksi, dan pemasaran. Kami percaya bahwa dengan kerja sama dan kreativitas, kami dapat mencapai tujuan kami untuk merajut kebudayaan Indonesia dengan penuh cinta dan kebanggaan.</p>
    </section>

    <footer>
        <p>Teras Tenun &copy; 2024</p>
    </footer>

     <!-- Feather Icon-->
     <script>
      feather.replace();
    </script>

    <!-- Javascript-->
    <script src="js/script.js"></script>
</body>
</html>
