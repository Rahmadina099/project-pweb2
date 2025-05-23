<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<?php
include 'koneksi.php';
// Ambil ID terbesar dari tabel poliklinik
$query = mysqli_query($koneksidb, "SELECT MAX(kd_poli) AS maxID FROM poliklinik");
$data = mysqli_fetch_assoc($query);
$kode = $data['maxID'];

// Jika belum ada data, mulai dari P001
if ($kode == null) {
    $kodeBaru = "P001";
} else {
    // Ambil angka dari kode terakhir dan tambah 1
    $urutan = (int) substr($kode, 1) + 1;
    $kodeBaru = "P" . str_pad($urutan, 3, "0", STR_PAD_LEFT);
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        input Poliklinik
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">isi data poliklnik</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="proses_poli.php" method="post">
              <div class="box-body">
                <div class="form-group">
  <label for="polikliniku">Id Poliklinik</label>
  <input type="text" class="form-control" id="poli" name="kd_poli" value="<?php echo $kodeBaru; ?>" readonly>
</div>

                <div class="form-group">
                  <label for="alamat_tamu">Nama Poliklnik</label>
                  <input type="text" class="form-control" id="poli" name="nama_poli"placeholder="enter nama poliklinik">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">lantai</label>
                  <input type="number" class="form-control" id="lantai" name="lantai" placeholder="enter lantai">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
</div>
            </form>
          </div>