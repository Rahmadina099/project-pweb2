<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<?php include('koneksi.php') ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Laboratorium</h1>
    </section>

    <section class="content">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Lab</th>
                    <th>No Rekam Medis</th>
                    <th>Hasil Lab</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM laboratorium";
                $hasil = mysqli_query($koneksidb, $sql);
                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                    <tr>
                        <td><?= $row['kd_lab']; ?></td>
                        <td><?= $row['no_rm']; ?></td>
                        <td><?= $row['hasil_lab']; ?></td>
                        <td><?= $row['ket']; ?></td>
                        <td>
                            <a href="edit_lab.php?kd_lab=<?= $row['kd_lab']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus_lab.php?kd_lab=<?= $row['kd_lab']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</div>
