<?php

require "php/function.php";
if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $mahasiswa = query("SELECT * FROM mahasiswa WHERE 
                 nama LIKE '%$keyword%'
                  ");
} else {
  $mahasiswa = query("SELECT * FROM mahasiswa");
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Mahasiswa</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/mycss.css"> -->


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .container {
      background-image: url(assets/buku.jpg);
    }

    .card {
      background-color: brown;
    }
  </style>

</head>

<body>


  <div class="jumbotron text-center jumbotron-fluid bg-success text-light pb-0">
    <div class="buku">
      <h1 class="display-3">Mahasiswa</h1>
      <p class="lead">Mahasiswa</p>


      <nav class="navbar navbar-expand-lg navbar bg-light pl-4 pr-4 ml-0 mr-0 text-danger">
        <a class="navbar-brand" href="#"><img src="assets/unpas.png" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="php/login.php">Admin</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0 float-right p-3" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-light my-2 my-sm-0 bg-success" type="submit" name="search">Search</button>

          </form>
        </div>
      </nav>
    </div>
  </div>



  <section class="buku">
    <div class="container" id="container">
      <div class="row pt-5">

        <?php if (empty($mahasiswa)) : ?>

          <h1 align="center">Data Tidak Ditemukan</h1>

        <?php else : ?>

          <?php foreach ($mahasiswa as $mhs) : ?>

            <div class="col-sm-3 mb-3">
              <div class="card  mt-3">
                <img class="card-img-top" src="assets/<?= $mhs["foto"] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $mhs["nama"] ?></h5>
                  <a href="php/detail.php?id=<?= $mhs['id_mhs']; ?>" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>