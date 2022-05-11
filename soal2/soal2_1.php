<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dataPegawai";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed : " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE pegawai(
        ID_Pegawai INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Nama VARCHAR(30) NOT NULL,
        Jenis_Kelamin VARCHAR(15),
        N0_Telp VARCHAR(12),
        Alamat VARCHAR(100)
    )";
    
    if (mysqli_query($conn,$sql)){
        echo "Tabel Pegawai creating successfully";
    }else{
        echo "Error creating table : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
