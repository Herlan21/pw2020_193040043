<?php
require '../php/function.php';
$mahasiswa = search($_GET['keyword']);
?>


<div class="container">
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