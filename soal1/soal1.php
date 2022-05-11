<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failde : " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE buku_tamu(
        ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NAMA VARCHAR(200) NOT NULL,
        EMAIL VARCHAR(50)
    )";

    if(mysqli_query($conn, $sql)){
        echo "Tabel buku_tamu berhasil dibuat..!";
    }else{
        echo "Error : " .$sql. "<br>" .mysqli_error($conn);
    }

    mysqli_close($conn);

?>
