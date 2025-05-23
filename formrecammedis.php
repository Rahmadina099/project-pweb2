<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data Pasien
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
              <h3 class="box-title">isi form pasien</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="norm">No.Rekam Medis</label>
                  <input type="text" class="form-control" id="norm" placeholder="">
                </div>
                <div class="form-group">
                  <label for="id tindakan">id Tindakan</label>
                  <input type="text" class="form-control" id="id tindakan" placeholder="">
                </div>
                
                <div class="form-group">
                  <label for="kd obat">Kode Obat</label>
                  <input type="text" class="form-control" id="kd obat" placeholder="">
                </div>
                <div class="form-group">
                  <label for="kd user">Kode User</label>
                  <input type="date" class="form-control" id="kd user" placeholder="">
                </div>
                <div class="form-group">
                  <label for="diagnosa">Diagnosa</label>
                  <input type="text" class="form-control" id="diagnosa" placeholder="">
                </div>
                <div class="form-group">
                  <label for="resep">Resep</label>
                  <input type="text" class="form-control" id="resep" placeholder="">

                </div>
                <div class="form-group">
                  <label for="keluhan">Keluhan</label>
                 <textarea name="keluhan" cols="40" rows="5"></textarea>

                </div>
                <div class="form-group">
                  <label for="tgl pemerikasaan">Tgl.Pemeriksaan</label>
                  <input type="date" class="form-control" id="hubkel" placeholder="enter ">
                </div>
                <div class="form-group">
                  <label for="ket">Keterangan</label>
                 <textarea name="ket" cols="40" rows="5"></textarea>

                </div>
                

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
</div>
            </form>
          </div>