<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php
      require_once 'connect.php';
      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: /');
      }

      if(isset($_POST['submit'])) {
        $email    = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $remember = (!empty($_POST['remember_me']) ? $_POST['remember_me'] : '');
        $messages = [];

        if(empty($email) || empty($password)) {
          $messages[] = 'Silahkan isi semua data yang diperlukan!';
        } elseif(count((array) mysqli_query($connect, 'SELECT email FROM pengguna WHERE email = "'.$email.'"')->fetch_array()) == 0) {
          $messages[] = 'Email tidak terdaftar!';
        } else {
          $data = mysqli_query($connect, 'SELECT password, nama_lengkap FROM pengguna')->fetch_assoc();
          if(password_verify($password, $data['password'])) {
            $_SESSION['is_login'] = $data['nama_lengkap'];
            if($remember) {
              if(!isset($_COOKIE['is_logged'])) {
                setcookie('_logged', substr(md5($email), 0, 10), time() + (60 * 60 * 24), '/');
              }
            }
            header('location: beranda.php');
          } else {
            $messages[] = 'Kata sandi salah!';
          }
        }
      }
    ?>
    <div class="container">
      <div class="row" style="margin: 100px auto;width: 400px;">
        <div class="col-md-12" style="margin-bottom: 6px;">
          <?php
            if(!empty($messages)) {
              foreach($messages as $message) {
                echo '<b>Warning:</b> <span style="color:red;">'.$message.'</span>';
              }
            }
          ?>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <div class="text-center">
                <b>Masuk Akun</b>
              </div>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="mb-3">
                  <label class="form-label">
                    Email
                  </label>
                  <input type="email" name="email" class="form-control" placeholder="Silahkan masukkan email..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label">
                    Password
                  </label>
                  <input type="password" name="password" class="form-control" placeholder="Silahkan masukkan password..." required>
                </div>
                <div class="mb-3">
                  <input class="form-check-input" type="checkbox" name="remember_me">
                  <label class="form-check-label">
                    Remember Me
                  </label>
                </div>
                <div class="mb-12">
                  <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">
                    MASUK
                  </button>
                </div>
                <p>Sudah memiliki akun silahkan <a href="login.php">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>