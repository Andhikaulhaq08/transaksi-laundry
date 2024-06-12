<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: "Arial Black", arial;}
        table {border-collapse: collapse;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0;}
    </style>
</head>
<body>
    <center><h1>Layanan loundry</h1></center>
    <h3>Tabel detail_transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>id_transaksi</th>
                <th>id_layanan</th>
                <th>jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM detail_transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_transaksi'] ?></td>
                    <td><?php echo $row['id_layanan'] ?></td>
                    <td><?php echo $row['jumlah'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel layanan</h3>
    <table>
        <thead>
            <tr>
                <th>id_layanan</th>
                <th>nama_layanan</th>
                <th>harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM layanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_layanan'] ?></td>
                    <td><?php echo $row['nama_layanan'] ?></td>
                    <td><?php echo $row['harga'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>id_pegawai</th>
                <th>nama_pegawai</th>
                <th>Jabatan</th>
                <th>no_telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pegawai';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_pegawai'] ?></td>
                    <td><?php echo $row['nama_pegawai'] ?></td>
                    <td><?php echo $row['Jabatan'] ?></td>
                    <td><?php echo $row['no_telepon'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel pelanaggan </h3>
    <table>
        <thead>
            <tr>
                <th>id_pelanggan</th>
                <th>nama_pelanggan</th>
                <th>alamat</th>
                <th>tanggal_lahir</th>
                <th>no_telepon</th>
                <th>nama_paket</th>
                <th>durasi_paket</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_pelanggan'] ?></td>
                    <td><?php echo $row['nama_pelanggan'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['tanggal_lahir'] ?></td>
                    <td><?php echo $row['no_telepon'] ?></td>
                    <td><?php echo $row['nama_paket'] ?></td>
                    <td><?php echo $row['durasi_paket'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>id_Transaksi</th>
                <th>id_Pelanggan</th>
                <th>id_pegawai</th>
                <th>tanggal_transaksi</th>
                <th>total_biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_transaksi'] ?></td>
                    <td><?php echo $row['id_pelanggan'] ?></td>
                    <td><?php echo $row['id_pegawai'] ?></td>
                    <td><?php echo $row['tanggal_transaksi'] ?></td>
                    <td><?php echo $row['total_biaya'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>