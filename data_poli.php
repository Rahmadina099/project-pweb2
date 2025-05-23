<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<?php include('koneksi.php') ?>

<div class="content-wrapper">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Poli</th>
                <th>Nama Poli</th>
                <th>Lantai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM poliklinik";
        $hasil = mysqli_query($koneksidb, $sql);
        $totaldata = mysqli_num_rows($hasil);

        if ($totaldata == 0) {
            echo "<tr><td colspan='4'>Data Masih Kosong</td></tr>";
        } else {
            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                <tr>
                    <td><?php echo $row['kd_poli']; ?></td>
                    <td><?php echo $row['nama_poli']; ?></td>
                    <td><?php echo $row['lantai']; ?></td>
                    <td>
                        <a href="edit_poli.php?kd_poli=<?php echo $row['kd_poli']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus_poli.php?kd_poli=<?php echo $row['kd_poli']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
        <?php }
        }
        ?>
        </tbody>
    </table>
</div>
