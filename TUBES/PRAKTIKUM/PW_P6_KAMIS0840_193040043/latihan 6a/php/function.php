<?php

function koneksi(){

    $conn = mysqli_connect("localhost" , "root" , "");
    mysqli_select_db($conn, "tubes_193040043");
        return $conn;
    }
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn , "$sql");
        $buku = [];
        while ($buku = mysqli_fetch_assoc($result)){
            $bk[] = $buku;
        }
        return $bk;
    }
?>