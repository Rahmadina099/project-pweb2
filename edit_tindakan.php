<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>
<?php
include('koneksi.php');
$kd_tindakan = $_GET['kd_tindakan'];
$sql = "SELECT * FROM tindakan WHERE kd_tindakan='$kd_tindakan'";
$query = mysqli_query($koneksidb, $sql);
$data = mysqli_fetch_assoc($query);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        input Tindakan
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
              <h3 class="box-title">isi Edit Form Tindakan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="update_tindakan.php" method="post">
              <div class="box-body">
                <div class="form-group">
  <label for="polikliniku">Kode Tindakan</label>
  <input type="text" class="form-control"  name="kd_tindakan" value="<?php echo $data['kd_tindakan']; ?>" readonly>
</div>

                <div class="form-group">
                  <label for="alamat_tamu">Nama Tindakan</label>
                  <input type="text" class="form-control"  name="nama_tindakan" value="<?php echo $data['nama_tindakan']; ?>">
                </div>
                <div class="form-group">
                <label for="notelp_tamu">Keterangan</label>
                <textarea name="ket" cols="30" rows="5"><?php echo $data['ket']; ?></textarea>
                <div>
                <div class="form-group">
              <input type="submit" value="Update">
                </div>
</div>
            </form> 
          </div>
