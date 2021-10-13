<?php
    include './koneksi.php';

    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO siswa (nis, nama_lengkap,alamat) VALUES ('$nis', '$nama_lengkap', '$alamat')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>kembali</a><br>";
    }else{
        echo "Error: " . $sql. "<br>" . $conn->error;
    }

    $conn->close();
?>