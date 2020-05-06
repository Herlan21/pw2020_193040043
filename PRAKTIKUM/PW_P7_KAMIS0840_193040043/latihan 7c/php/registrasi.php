<?php
require 'function.php';
if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('Registrasi berhasil');
        document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
        alert('Registrasi gagal');
        document.location.href = 'login.php';
    </script>";
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .login {
      padding-right: 700px;
      padding-left: 700px;
      margin-top: 200px;
    }
  </style>
  <title>Buat Akun</title>
</head>

<body>
  <form class="login text-center" method="POST">
    <img class="mb-4" src="../assets/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Buat Akun</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" id="inputEmail" class="form-control mt-2" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control mt-2 mb-3" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block bg-success" type="submit" name="register">Daftar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019 - 2020</p>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>