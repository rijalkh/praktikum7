<html>
    <head>
        <title>Form Data Pegawai</title>
    </head>

    <body>
        <h1>Form Data Pegawai</h1>
        <form action="simpan.php" method="POST">

            <p>
                <label for="nama">ID Pegawai</label><br>
                <label ><input type="text" name="id"></label>
            </p>

            <p>
                <label for="nama">Nama</label><br>
                <label ><input type="text" name="nama"></label>
            </p>

            <p>
                <label for="nama">Jenis Kelamin</label><br>
                <label ><input type="radio" name="jk" value="laki-laki">Laki-laki</label>
                <label ><input type="radio" name="jk" value="perempuan">Perempuan</label>
            </p>

            <p>
                <label for="nama">No.Telp</label><br>
                <label ><input type="text" name="N0_Telp"></label>
            </p>

            <p>
                <label for="Alamat">Alamat</label><br>
                <textarea name="Alamat" id="" cols="30" rows="3"></textarea>
            </p>

            <input type="submit" name="simpan" value="Tambah" id="btn">
            <input type="reset" name="reset" value="Reset" id="btn">

        </form>
    </body>
</html>
