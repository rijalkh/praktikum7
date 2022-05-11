<?php

    include('koneksi.php');

    if(!isset($_GET['id']) ){
        header('Location: list_pegawai.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM pegawai WHERE ID_Pegawai=$id";
    $query = mysqli_query($conn, $sql);
    $pegawai = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan..!");
    }

?>

<html>
    <head>
        <title>Form Edit Data Pegawai</title>
    </head>

    <body>
        <h1>Form Edit Data Pegawai</h1>
        <form action="edit.php" method="POST">
            <p>
                <label for="nama">ID Pegawai</label><br>
                <label ><input type="text" name="id" value="<?php echo $pegawai['ID_Pegawai'] ?>"></label>
            </p>

            <p>
                <label for="nama">Nama</label><br>
                <label ><input type="text" name="nama" value="<?php echo $pegawai['Nama'] ?>"></label>
            </p>

            <p>
                <label for="nama">Jenis Kelamin</label><br>
                <?php $jk = $pegawai['Jenis_Kelamin']; ?>
                <label ><input type="radio" name="jk" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>Laki-laki</label>
                <label ><input type="radio" name="jk" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>Perempuan</label>
            </p>

            <p>
                <label for="nama">No.Telp</label><br>
                <label ><input type="text" name="N0_Telp"  value="<?php echo $pegawai['N0_Telp'] ?>"></label>
            </p>

            <p>
                <label for="Alamat">Alamat</label><br>
                <textarea name="Alamat" id="" cols="30" rows="3"><?php echo $pegawai['Alamat'] ?></textarea>
            </p>

            <input type="submit" name="update" value="Simpan" id="btn">

        </form>
    </body>
</html>
