<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $sql = "DELETE FROM pegawai WHERE ID_Pegawai = $id";
        $query = mysqli_query($conn,$sql);
    
        if( $query ){
            header('Location: list_pegawai.php');
        } else {
            die("Data gagal dihapus...");
        }
    }
    mysqli_close($conn);
?>
