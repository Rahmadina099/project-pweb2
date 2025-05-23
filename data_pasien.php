<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<?php include('koneksi.php') ?>

<div class="content-wrapper">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                
                <th>No.Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>No.Telp</th>
                <th>Nama KK</th>
                <th>Hub Kel</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM pasien";
        $hasil = mysqli_query($koneksidb, $sql);
        $totaldata = mysqli_num_rows($hasil);
        $no = 1;

        if ($totaldata == 0) {
            echo "<tr><td colspan='11'>Data Masih Kosong</td></tr>";
        } else {
            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                <tr>
                    
                    <td><?php echo $row['no_pasien']; ?></td>
                    <td><?php echo $row['nama_pasien']; ?></td>
                    <td><?php echo $row['jk']; ?></td>
                    <td><?php echo $row['agama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['tgl_lahir']; ?></td>
                    <td><?php echo $row['usia']; ?></td>
                    <td><?php echo $row['no_telp']; ?></td>
                    <td><?php echo $row['nama_kk']; ?></td>
                    <td><?php echo $row['hub_kel']; ?></td>
                    <td>
                        <a href="edit_pasien.php?no_pasien=<?php echo $row['no_pasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus_pasien.php?no_pasien=<?php echo $row['no_pasien']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
        <?php }
        }
        ?>
        </tbody>
    </table>
</div>
