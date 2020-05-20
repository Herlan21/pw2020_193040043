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
    $mhws = [];
    while ($m = mysqli_fetch_assoc($result)) {
        $mhws[] = $m;
    }
    return $mhws;
}

function tambah($data)
{
    $conn = koneksi();
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "INSERT INTO mahasiswa VALUES 
            ('','$foto' , '$nama' , '$nrp' , '$email' , '$jurusan')
            
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
    $id = $data['id_mhs'];
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $queryubah = "UPDATE mahasiswa SET 
                foto = '$foto',
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan'   
    WHERE id_mhs = '$id' ";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan !');
                </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user VALUES 
            ('','$username' , '$password')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
