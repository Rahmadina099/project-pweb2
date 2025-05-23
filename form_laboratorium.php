<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
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
              <h3 class="box-title">isi data laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="proses_laboratorium.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="kodelab">Kode Lab</label>
                  <input type="text" class="form-control" id="kdlab" name="kd_lab" placeholder="">
                </div>
                <div class="form-group">
                  <label for="norm">No.Rekam Medis</label>
                  <input type="text" class="form-control" id="norm" name="no_rm" placeholder="">
                </div>
                <div class="form-group">
                  <label for="hasillab">Hasil lab</label>
                  <input type="text" class="form-control" id="hasil lab" name="hasil_lab"placeholder="enter hasil lab">
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