<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        input obat
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
              <h3 class="box-title">isi data obat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="proses_obat.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_tamu">Kd Obat</label>
                  <input type="text" class="form-control" id="kd_obat" name="kd_obat" placeholder="Enter nama">
                </div>
                <div class="form-group">
                  <label for="alamat_tamu">Nama Obat </label>
                  <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">Jumlah Obat</label>
                  <input type="text" class="form-control" id="jml_obat" name="jml_obat" placeholder="enter no">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">Ukuran</label>
                  <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="enter no">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">Harga</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="enter no">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
</div>
            </form>
          </div>