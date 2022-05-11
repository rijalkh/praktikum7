<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "dataPegawai";

$conn = mysqli_connect($server, $user, $password, $dbname);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
