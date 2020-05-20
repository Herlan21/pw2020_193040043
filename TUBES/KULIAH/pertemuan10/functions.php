<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040043');
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nrp']);
  $nrp =  htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['foto']);

  $query = "INSERT INTO
            mahasiswa
            VALUES
            (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
