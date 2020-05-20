<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require "function.php";

$id = $_GET["id"];
$buku = query("SELECT * FROM buku WHERE id_buku = $id")[0];

?>


<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">



  <title>Cover Template · Bootstrap</title>

  <!-- Bootstrap CSS -->


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

    /* Links */
    a,
    a:focus,
    a:hover {
      color: #fff;
    }

    /* Custom default button */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
      background-color: #fff;
      border: .05rem solid #fff;
    }

    html,
    body {
      height: 100%;
      background-color: #333;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      color: #fff;
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 42em;
    }

    .masthead {
      margin-bottom: 2rem;
    }

    .masthead-brand {
      margin-bottom: 0;
    }

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    @media (min-width: 48em) {
      .masthead-brand {
        float: left;
      }

      .nav-masthead {
        float: right;
      }
    }

    .cover {
      padding: 0 1.5rem;
    }

    .cover .btn-lg {
      padding: .75rem 1.25rem;
      font-weight: 700;
    }

    .mastfoot {
      color: rgba(255, 255, 255, .5);
    }
  </style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

</head>

<body class="text-center">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand text-success">Detail</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active text-dark" href="index.php">Kembali Ke List Buku</a>
          <a class="nav-link active text-dark" href="#">Features</a>
          <a class="nav-link active text-dark" href="#">Contact</a>
        </nav>
      </div>
    </header>

    <img class="p-5 mb-0 thumbnail mx-auto d-block " src="../assets/<?= $buku["cover"]; ?>" alt="" style="max-height:500px">
    <main role="main" class="inner cover">
      <h1 class="cover-heading mt-0"><?= $buku["judul_buku"] ?></h1>
      <p class="lead"><?= $buku["deskripsi"] ?></p>
      <p class="lead">

        <!-- MODAL -->

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
          Selengkapnya
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable text-justify">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p><?= $buku["deslengkap"] ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="../index.php"><button type="button" class="btn btn-primary">Ke List</button></a>
              </div>
            </div>
          </div>
        </div>

        <!-- END MODAL -->

      </p>
    </main>



    <footer class="mastfoot mt-auto">
      <div class="inner text-dark">
        <p>Zebag books <a href="https://getbootstrap.com/">Bootstrap</a> &copy; by <a href="https://twitter.com/mdo"></a>2020 IF Unpas</p>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>