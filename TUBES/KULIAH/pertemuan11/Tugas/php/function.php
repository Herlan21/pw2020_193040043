<?php

function koneksi()
{

    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_193040043");
    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $mahasiswa = [];
    while ($mahasiswa = mysqli_fetch_assoc($result)) {
        $mhs[] = $mahasiswa;
    }
    return $mhs;
}

function tambah($data)
{
    $conn = koneksi();
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $email = htmlspecialchars($data['email']);
    $foto = htmlspecialchars($data['foto']);

    $query = "INSERT INTO mahasiswa VALUES 
            ('','$nrp' , '$nama' , '$jurusan' , '$email' , '$foto')
            
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mhs = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id_mhs']);
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $email = htmlspecialchars($data['email']);
    $foto = htmlspecialchars($data['foto']);

    $queryubah = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                jurusan = '$jurusan',
                email = '$email',
                foto = '$foto'   
    WHERE id_mhs = '$id' 

           ";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}
