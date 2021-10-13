<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_siswa"; //name your database

$conn = new mysqli($host, $user, $pass, $db, );

if($conn) {
    echo "koneksi berhasil";
}else{
   echo "koneksi gagal";
}



?>