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
              <h3 class="box-title">isi data Kunjungan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="tgl kunjungan">Tanggal Kunjungan</label>
                  <input type="date" class="form-control" id="tgl kunjungan" placeholder="">
                </div>
                <div class="form-group">
                  <label for="no.pasien">No.Pasien</label>
                  <input type="text" class="form-control" id="no pasien" placeholder="enter no pasien">
                </div>
                <div class="form-group">
                  <label for="notelp_tamu">kode poli</label>
                  <input type="text" class="form-control" id="kdpoli" placeholder="enter kode poli">
                </div>
                 <div class="form-group">
                  <label for="notelp_tamu">Jam Kunjungan</label>
                  <input type="text" class="form-control" id="jam" placeholder="enter jam kunjungan">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
</div>
            </form>
          </div>