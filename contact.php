<?php
session_start();

if (!isset($_SESSION['is_login']) && !isset($_COOKIE['_logged'])) {
   
}
?>
  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

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
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
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
        .content form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .content form input, .content form textarea {
            padding: 10px;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }
        .content form button {
            padding: 10px;
            background: #77b300;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
        .content form button:hover {
            background: #669900;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 30px 0;
        }
        .message {
            text-align: center;
            padding: 10px;
            margin: 20px 0;
            border: 1px solid #77b300;
            background: #e8f5e9;
            color: #388e3c;
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

    <section class="content">
        <h2>Contact Us</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = "your-email@example.com";  // Ganti dengan alamat email Anda
            $subject = "Contact Form Submission from " . $name;
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo '<div class="message">Thank you for contacting us. We will get back to you shortly.</div>';
            } else {
                echo '<div class="message" style="border-color: red; background: #ffebee; color: #d32f2f;">There was an error sending your message. Please try again later.</div>';
            }
        }
        ?>
        <form action="contact.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
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