<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pemograman_web1";


$conn = mysqli_connect($host, $user, $pass, $db);

 if($conn){
 echo "Koneksi berhasil";
 }else{
    echo "Koneksi gagal".mysqli_errno($conn);
 }