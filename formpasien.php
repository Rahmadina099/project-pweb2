<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebarpasien.php') ?>
<?php
include 'koneksi.php';


$query = mysqli_query($koneksidb, "SELECT MAX(no_pasien) AS maxPasien FROM pasien");
$data = mysqli_fetch_assoc($query);
$kode = $data['maxPasien'];

if ($kode == null) {
    $kodeBaru = 1;
} else {
    $kodeBaru = (int) $kode + 1;
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Input Data Pasien</h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Isi Form Pasien</h3>
          </div>

          <form role="form" action="simpan.php" method="post">
            <div class="box-body">

              <div class="form-group">
                <label>No Pasien</label>
                <input type="text" class="form-control" name="no_pasien" value="<?php echo $kodeBaru; ?>" readonly>
              </div>

              <div class="form-group">
                <label>Nama Pasien</label>
                <input type="text" class="form-control" name="namapasien" placeholder="Masukkan nama pasien">
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <label><input type="radio" name="jk" value="L"> Laki-laki</label>
                <label><input type="radio" name="jk" value="p"> Perempuan</label>
              </div>

              <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control">
                  <option value="Islam">Islam</option>
                  <option value="Kristen protestan">Kristen Protestan</option>
                  <option value="Kristen katolik">Kristen Katolik</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Katolik">Katolik</option>
                </select>
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl">
              </div>

              <div class="form-group">
                <label>Usia</label>
                <input type="number" class="form-control" name="usia">
              </div>

              <div class="form-group">
                <label>No. Telp</label>
                <input type="text" class="form-control" name="notelp" placeholder="Masukkan nomor telepon">
              </div>

              <div class="form-group">
                <label>Nama KK</label>
                <input type="text" class="form-control" name="namakk" placeholder="Masukkan nama kepala keluarga">
              </div>

              <div class="form-group">
                <label>Hubungan Keluarga</label>
                <input type="text" class="form-control" name="hubkel" placeholder="Contoh: Anak, Istri, Suami, dll">
              </div>

            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</div>
