<?php

include("koneksi.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $noHp = $_POST['N0_Telp'];
    $alamat = $_POST['Alamat'];

    $sql = "UPDATE pegawai SET Nama='$nama', Jenis_Kelamin='$jk', N0_Telp='$noHp', Alamat='$alamat' WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: list_pegawai.php');
    } else {
        die("Perubahan gagal disimpan");
    }
}

mysqli_close($conn)

?>
