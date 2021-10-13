<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>tambah data</a><br>";

    $sql = "SELECT * FROM siswa";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS : " . $baris[1] . "<br>";
        echo "Nama : " . $baris[2] . "<br>";
        echo "Alamat : " . $baris[3] . "<br>";
        echo "<a href='ubah_data.php?id_siswa=$baris[0]'>ubah &nbsp</a>";  
        echo "<a href='hapus.php?id_siswa=$baris[0]'>hapus</a>";     
        $a++;
    }
    $conn->close();    
?>