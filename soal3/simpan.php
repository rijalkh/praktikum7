<?php

include('koneksi.php');

    if(isset($_POST['simpan'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $noHp = $_POST['N0_Telp'];
        $alamat = $_POST['Alamat'];

        $sql = "INSERT INTO pegawai (ID_Pegawai,Nama,Jenis_Kelamin,N0_Telp,Alamat)
        VALUE ('$id','$nama', '$jk', '$noHp', '$alamat')";

        if(mysqli_query($conn,$sql)){
            header('Location: simpan.php?status=sukses');
        }else{
            header('Location: simpanS.php?status=gagal');
        }


    }else{

    }

    mysqli_close($conn);

?>

