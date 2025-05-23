<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<?php include('koneksi.php') ?>

<div class="content-wrapper">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Tindakan</th>
                <th>Nama Tindakan</th>
                <th>Ket</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM tindakan";
        $hasil = mysqli_query($koneksidb, $sql);
        $totaldata = mysqli_num_rows($hasil);

        if ($totaldata == 0) {
            echo "<tr><td colspan='4'>Data Masih Kosong</td></tr>";
        } else {
            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                <tr>
                    <td><?php echo $row['kd_tindakan']; ?></td>
                    <td><?php echo $row['nama_tindakan']; ?></td>
                    <td><?php echo $row['ket']; ?></td>
                    <td>
                        <a href="edit_tindakan.php?kd_tindakan=<?php echo $row['kd_tindakan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus_tindakan.php?kd_tindakan=<?php echo $row['kd_tindakan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
        <?php }
        }
        ?>
        </tbody>
    </table>
</div>
