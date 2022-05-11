<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){
        die("Connection failde : " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE dataPegawai";
    
    if (mysqli_query($conn,$sql)){
        echo "Database dataPegawai creating successfully";
    }else{
        echo "Error creating database : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>

