<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>
<?php
include('koneksi.php');


if (isset($_GET['no_pasien'])) {
    $no_pasien = $_GET['no_pasien'];

    
    $sql = "SELECT * FROM pasien WHERE no_pasien = '$no_pasien'";
    $query = mysqli_query($koneksidb, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location.href='data_pasien.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Parameter tidak ditemukan!'); window.location.href='data_pasien.php';</script>";
    exit;
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Edit Data Pasien</h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Form Pasien</h3>
          </div>

          <form role="form" action="update_pasien.php" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>No Pasien</label>
                <input type="text" class="form-control" name="no_pasien" value="<?php echo $data['no_pasien']; ?>" readonly>
              </div>

              <div class="form-group">
                <label>Nama Pasien</label>
                <input type="text" class="form-control" name="namapasien" value="<?php echo $data['nama_pasien']; ?>" required>
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <label><input type="radio" name="jk" value="L" <?= $data['jk'] == 'L' ? 'checked' : '' ?>> Laki-laki</label>
                <label><input type="radio" name="jk" value="P" <?= $data['jk'] == 'P' ? 'checked' : '' ?>> Perempuan</label>
              </div>

              <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control" required>
                  <option value="Islam" <?= $data['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                  <option value="Kristen protestan" <?= $data['agama'] == 'Kristen protestan' ? 'selected' : '' ?>>Kristen Protestan</option>
                  <option value="Kristen katolik" <?= $data['agama'] == 'Kristen katolik' ? 'selected' : '' ?>>Kristen Katolik</option>
                  <option value="Budha" <?= $data['agama'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
                  <option value="Hindu" <?= $data['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                  <option value="Katolik" <?= $data['agama'] == 'Katolik' ? 'selected' : '' ?>>Katolik</option>
                </select>
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" required>
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl_lahir']; ?>" required>
              </div>

              <div class="form-group">
                <label>Usia</label>
                <input type="number" class="form-control" name="usia" value="<?php echo $data['usia']; ?>" required>
              </div>

              <div class="form-group">
                <label>No. Telp</label>
                <input type="text" class="form-control" name="notelp" value="<?php echo $data['no_telp']; ?>" required>
              </div>

              <div class="form-group">
                <label>Nama KK</label>
                <input type="text" class="form-control" name="namakk" value="<?php echo $data['nama_kk']; ?>" required>
              </div>

              <div class="form-group">
                <label>Hubungan Keluarga</label>
                <input type="text" class="form-control" name="hubkel" value="<?php echo $data['hub_kel']; ?>" required>
              </div>

              <input type="submit" class="btn btn-success" value="Update">
              <a href="data_pasien.php" class="btn btn-secondary">Batal</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
</div>
