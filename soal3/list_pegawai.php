<?php
    include('koneksi.php');
?>

<html>
    <head></head>

    <body>
        <table  border='1'>
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No.Telp</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php
                $sql = 'SELECT * FROM pegawai';
                $query = mysqli_query($conn, $sql);

                while($pegawai = mysqli_fetch_array($query)){
                    echo '<tr>';
                    echo '<td>' .$pegawai['ID_Pegawai'].'</td>';
                    echo '<td>' .$pegawai['Nama'].'</td>';
                    echo '<td>' .$pegawai['Jenis_Kelamin'].'</td>';
                    echo '<td>' .$pegawai['N0_Telp'].'</td>';
                    echo '<td>' .$pegawai['Alamat'].'</td>';

                    echo "<td>";
                    echo "<a href='form_edit.php?id=".$pegawai['ID_Pegawai']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$pegawai['ID_Pegawai']."'>Hapus</a>";
                    echo "</td>";
        
                    echo "</tr>";
                }
            ?>

            </tbody>
        </table>
    </body>
</html>
