<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>
<?php
include('koneksi.php');
$kd_lab = $_GET['kd_lab'];
$sql = "SELECT * FROM laboratorium WHERE kd_lab='$kd_lab'";
$query = mysqli_query($koneksidb, $sql);
$data = mysqli_fetch_assoc($query);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        input Laboratorium
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
              <h3 class="box-title">edit data Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="update_poli.php" method="post">
              <div class="box-body">
                <div class="form-group">
  <label for="polikliniku">Kode Lababoratorium</label>
  <input type="text" class="form-control"  name="kd_lab" value="<?php echo $data['kd_lab']; ?>" readonly>
</div>

                <div class="form-group">
                  <label for="alamat_tamu">No Rekamedis </label>
                  <input type="text" class="form-control"  name="no_rm" value="<?php echo $data['no_rm']; ?>"readonly>
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">Hasil Labolatorium</label>
                  <input type="number" class="form-control" name="hasil_lab" value="<?php echo $data['hasil_lab']; ?>">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">Keterangan</label>
                  <input type="text" class="form-control" name="ket" value="<?php echo $data['ket']; ?>">
                </div>
                <div class="form-group">
              <input type="submit" value="Update">
                </div>
</div>
            </form>
          </div>
