<?php

function koneksi()
{

    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes_193040043");
    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $buku = [];
    while ($buku = mysqli_fetch_assoc($result)) {
        $bk[] = $buku;
    }
    return $bk;
}

function tambah($data)
{
    $conn = koneksi();
    $cover = htmlspecialchars($data['cover']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $harga = htmlspecialchars($data['harga']);


    $query = "INSERT INTO buku VALUES ('' , '$cover' , '$judul_buku' , '$pengarang' , '$tahun_terbit' , '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
