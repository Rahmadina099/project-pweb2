<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>
<?php
include('koneksi.php');
$kd_poli = $_GET['kd_poli'];
$sql = "SELECT * FROM poliklinik WHERE kd_poli='$kd_poli'";
$query = mysqli_query($koneksidb, $sql);
$data = mysqli_fetch_assoc($query);
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
            <form role="form" action="update_poli.php" method="post">
              <div class="box-body">
                <div class="form-group">
  <label for="polikliniku">Id Poliklinik</label>
  <input type="text" class="form-control"  name="kd_poli" value="<?php echo $data['kd_poli']; ?>" readonly>
</div>

                <div class="form-group">
                  <label for="alamat_tamu">Nama Poliklnik</label>
                  <input type="text" class="form-control"  name="nama_poli" value="<?php echo $data['nama_poli']; ?>">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">lantai</label>
                  <input type="number" class="form-control" name="lantai" value="<?php echo $data['lantai']; ?>">
                </div>
                <div class="form-group">
              <input type="submit" value="Update">
                </div>
</div>
            </form>
          </div>
