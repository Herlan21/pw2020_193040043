<?php

require "php/function.php";
$buku = query("SELECT * FROM buku");

?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Latihan 5b</title>
  <link rel="stylesheet" href="css/mycss.css">
</head>

<body>
  <div class="container">
    <div class="namatoko">
      <h2>Bags - Books</h2>


      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Cover</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Tahun Terbit</th>

          </tr>
        </thead>

        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($buku as $bk) : ?>
            <tr>
              <td> <?= $i ?> </td>
              <td><img src=assets/<?= $bk["cover"] ?> <?= $bk["cover"] ?>></td>
              <td> <?= $bk["judul_buku"] ?></td>
              <td> <?= $bk["pengarang"] ?></td>
              <td> <?= $bk["tahun_terbit"] ?></td>

            </tr>
            <?php $i++ ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>