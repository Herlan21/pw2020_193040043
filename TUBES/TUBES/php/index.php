<?php

require "function.php";
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE 
                 judul_buku LIKE '%$keyword%'
                  ");
} else {
  $buku = query("SELECT * FROM buku");
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Zebag Books</title>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- CSS OFFLINE BOOTSRAP -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/card2.css">
  <link rel="stylesheet" href="../css/carousel.css">

  <!-- CAROUSEL -->
  <!-- <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
</head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- CSS FOOTER -->
<link rel="stylesheet" href="../css/footer.css">
</head>


<body>

  <!-- JUMBOTRON -->

  <section id="carousel">
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item">
          <div class="jumbotron pulse animated hero-nature carousel-hero">
            <h1 class="hero-title">Review Novel</h1>
            <p class="hero-subtitle">Dapatkan informasi terbaru Review dari novel yang akan dirilis !</p>
            <p><a class="btn btn-primary hero-button plat" role="button" href="#">Lebih Lanjut</a></p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="jumbotron pulse animated hero-photography carousel-hero">
            <h1 class="hero-title">Resensi Novel</h1>
            <p class="hero-subtitle">Resensi dari novel terbaru !</p>
            <p><a class="btn btn-primary hero-button plat" role="button" href="#">Lebih Lanjut</a></p>
          </div>
        </div>

        <div class="carousel-item active">
          <div class="jumbotron pulse animated hero-technology carousel-hero">
            <h1 class="hero-title">Up to date !</h1>
            <p class="hero-subtitle">Dapatkan informasi yang up to date dari novel novel yang akan beredar !</p>
            <p><a class="btn btn-success hero-button plat" role="button" href="#">Lebih Lanjut</a></p>
          </div>
        </div>
      </div>

      <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
      <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
      </ol>
    </div>
  </section>



  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar bg-success pl-4 pr-4 ml-0 mr-0">
    <a class="navbar-brand" href="#"><img src="../assets/logo.png" width="100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <h5><a class="nav-link text-white" href="index.php">Beranda <span class="sr-only">(current)</span></a></h5>
        </li>
        <li class="nav-item">
          <h5><a class="nav-link text-white" href="login.php">Admin</a></h5>
        </li>
        <li class="nav-item">
          <h5><a class="nav-link text-white" href="../../index.php">Index Tugas</a></h5>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lainnya
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
        <input class="form-control mr-sm-2" type="text" placeholder="cari" aria-label="Search" name="keyword">
        <button class="btn btn-outline-light my-2 my-sm-0 bg-success t" type="submit" name="cari">Search</button>

      </form>
    </div>
  </nav>
  </div>
  </div>




  <!-- CARD  -->

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row pt-5 pl-5 ">

        <?php if (empty($buku)) : ?>

          <h1 align="center">Data Tidak Ditemukan</h1>

        <?php else : ?>
          <?php foreach ($buku as $bk) : ?>


            <div class="col-md-6 pb-3">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0"><?= $bk["judul_buku"] ?></h3>
                  <h5 class="mb-0"><?= $bk["pengarang"] ?></h5>
                  <div class="mb-1 text-muted"><?= $bk["tahun_terbit"] ?></div>
                  <p class="card-text mb-auto"><?= $bk["deskripsi"] ?></p>
                  <a href="review.php?id=<?= $bk['id_buku']; ?>"><button type="button" class="btn btn-success mt-0 " style="width: 100px;">lebih lanjut</button></a>
                </div>

                <div class="col-auto d-none d-lg-block  ">
                  <img src="../assets/<?= $bk["cover"] ?>" class="rounded mx-auto " style="width: 173px;" alt="Responsive image">

                  </svg>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        <?php endif; ?>


      </div>
    </div>



    <!-- FOOTER -->

    <footer class=" pb-5">
      <div class="row">

        <div class="col-sm-6 col-md-4 footer-navigation">

          <h3><img src="../assets/logo.png" width="100px" class="mr-3"><a href="#">Bags<span>Books</span></a></h3>
          <p class="links"><a href="#" class="mr-2">Home</a><strong> </strong>
            <a href="#" class="mr-2">Blog</a><strong> </strong>
            <a href="#" class="mr-2">Pricing</a><strong> </strong>
            <a href="#" class="mr-2">About</a><strong> </strong>
            <a href="#" class="mr-2">Faq</a><strong> </strong>
            <a href="#" class="mr-2">Contact</a></p>

          <p class="company-name">Zebag Books Review © 2020 </p>
        </div>

        <div class="col-sm-6 col-md-4 footer-contacts">
          <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
            <p><span class="new-line-span">Jl. Dr. Setiabudhi No.193 Bandung</span>Bandung, Jawa Barat</p>
          </div>
          <div><i class="fa fa-phone footer-contacts-icon"></i>
            <p class="footer-center-info email text-left">022 0123456</p>
          </div>
          <div><i class="fa fa-envelope footer-contacts-icon"></i>
            <p> <a href="#" target="_blank">zebag_support@books.com</a></p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4 footer-about text-white">
          <h4>About the company</h4>
          <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
          <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="https://github.com/Herlan21/pw2020_193040043"><i class="fa fa-github"></i></a></div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="../js/script.js"></script> -->

</body>


</html>