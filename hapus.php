<?php
    include './koneksi.php';

    $id = $_GET['id_siswa'];

    $sql = "DELETE FROM siswa WHERE id='$id'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil di hapus<br>";
        echo "</br>";
        echo "<a href='tampil.php'>kembali</a> <br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

?>