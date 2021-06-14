<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'sidmtekkom';
    $koneksi = mysqli_connect($host,$user,$pass,$db) or die ("gagal");
    if (mysqli_connect_errno()){
        echo "Koneksi gagal : " . mysqli_connect_error();
    }
?>