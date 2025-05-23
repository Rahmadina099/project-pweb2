<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        input Kunjungan
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
              <h3 class="box-title">isi data kunjungan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="proses_tindakan.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="kd tindakan">Kode Tindakan</label>
                  <input type="text" class="form-control" id="kd tindakan" name="kd_tindakan"placeholder="">
                </div>
                <div class="form-group">
                  <label for="nama tindakan">Nama Tindakan</label>
                  <input type="text" class="form-control" id="nm tindakan" name="nama_tindakan"placeholder="enter nama tindakan">
                </div>
                <div class="form-group">
                  <label for="ket">Keterangan</label>
                  <textarea name ="ket" cols="30" rows="5"></textarea>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
</div>
            </form>
          </div>