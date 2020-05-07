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
  <title>Zebag Books</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/mycss.css"> -->


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

  <div class="jumbotron text-center jumbotron-fluid bg-success text-white">
    <div class="container">
      <h1 class="display-3">Bags Books</h1>
      <p class="lead">Tempatnya belanja novel original dan bersahabat</p>
    </div>


    <form class="form-inline my-2 my-lg-0 float-right p-3" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="search">Search</button>
    </form>
  </div>

  <a href="php/admin.php" class="btn btn-primary btn-lg active ml-5" role="button" aria-pressed="true">Menuju Halaman Admin</a>






  <section class="buku">
    <div class="container" id="container">
      <div class="row pt-5">

        <?php if (empty($mahasiswa)) : ?>

          <h1 align="center">Data Tidak Ditemukan</h1>

        <?php else : ?>

          <?php foreach ($mahasiswa as $m) : ?>

            <div class="col-sm-3 mb-3">
              <div class="card  mt-3">
                <img class="card-img-top" src="assets/<?= $m["foto"] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $m["nama"] ?></h5>
                  <a href="php/detail.php?id=<?= $m['id_mhs']; ?>" class="btn btn-primary">Detail</a>
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
