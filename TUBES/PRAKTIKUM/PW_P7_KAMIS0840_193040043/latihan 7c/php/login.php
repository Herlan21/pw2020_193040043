<?php
session_start();
require 'function.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256',  $row['id'], false)) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: admin.php");
    die;
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);

    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $username;
      $_SESSION['hash'] = hash('sha256',  $row['id'], false);
    }

    if (isset($_POST['remember'])) {
      setcookie('username', $row['username'], time() + 60 * 60 * 24);
      $hash = hash('sha256',  $row['id']);
      setcookie('hash', $hash['username'], time() + 60 * 60 * 24);
    }

    if (hash('sha256',  $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .login {
      padding-right: 700px;
      padding-left: 700px;
      margin-top: 200px;
    }
  </style>
  <title>Login</title>
</head>

<body>

  <?php if (isset($error)) : ?>
    <h2>Username atau Password Keliru</h2>
  <?php endif ?>

  <form class="login text-center" method="POST">
    <img class="mb-4" src="../assets/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Masuk</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control mt-2 mb-3" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block bg-success" type="submit" name="submit">Masuk</button>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="registrasi.php">Belum Punya Akun? Buat Sekarang</a>
    <a class="dropdown-item" href="#">Lupa password?</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2019 - 2020</p>
  </form>



  <!-- <div class="login">
    <form class="px-5 py-5" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" name="remember" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-2 mb-0">Masuk</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">New around here? Sign up</a>
    <a class="dropdown-item" href="#">Forgot password?</a>
  </div> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>