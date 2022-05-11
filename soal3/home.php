<html>
    <head>
        <title>HOME</title>
    </head>
    <body>
        <h3>Sistem Informasi Pengelolaan Data Pegawai</h3>

        <h4>Daftar Menu</h4>
        <ul>
            <li><a href="form.php">Tambah Data Pegawai</a></li>
            <li><a href="list_pegawai.php">Lihat Data Pegawai</a></li>
        </ul>

        <?php if(isset($_GET['status'])): ?>

        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran Pegawai baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
        <?php endif; ?>
    </body>
</html>
