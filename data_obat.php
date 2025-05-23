<?php
include('koneksi.php'); 
include('tamplate/header.php');
include('tamplate/sidebardokter.php');
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Data Obat</h1>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-header">
        <a href="codinganobat.php" class="btn btn-primary">+ Tambah Obat</a>
      </div>
      <div class="box-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Obat</th>
              <th>Jumlah Obat</th>
              <th>Ukuran</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM obat";
            $query = mysqli_query($koneksidb, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_obat']; ?></td>
                <td><?php echo $data['jml_obat']; ?></td>
                <td><?php echo $data['ukuran']; ?></td>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.') . ",000"; ?></td>
                <td>
                  <a href="edit_obat.php?kd_obat=<?php echo $data['kd_obat']; ?>" class="btn btn-warning">Edit</a>
                  <a href="hapus_obat.php?kd_obat=<?php echo $data['kd_obat']; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<?php include('tamplate/footer.php'); ?>
