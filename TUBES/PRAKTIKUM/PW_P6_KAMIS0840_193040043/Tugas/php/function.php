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
    $books = [];
    while ($book = mysqli_fetch_assoc($result)) {
        $books[] = $book;
    }
    return $books;
}

function tambah($data)
{
    $conn = koneksi();
    $cover = htmlspecialchars($data['cover']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO buku VALUES 
            ('','$cover' , '$judul_buku' , '$pengarang' , '$tahun_terbit' , '$harga')
            
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();
    $id_buku = htmlspecialchars($data['id_buku']);
    $cover = htmlspecialchars($data['cover']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE buku SET 
                cover = '$cover',
                judul_buku = '$judul_buku',
                pengarang = '$pengarang',
                tahun_terbit = '$tahun_terbit',
                harga = '$harga'   
    WHERE id_buku = '$id_buku' 

           ";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}
