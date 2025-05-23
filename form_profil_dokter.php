<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebardokter.php') ?>
<form action="proses_dokter.php" method="post" enctype="multipart/form-data">
<div class="content-wrapper">
    <form role="form" action = "proses_dokter.php" method = "post">
    <div class="row">
        <div class="col-lg-4 text-center">
          <img src="aset/dist/img/user.png" class="img-circle tampil" alt="User Image" width="120px"><br>
          <input type="file" class="form-control form-control-sm" name="img" onchange="imgView()" id="img" >
        
         <span class="text-sm">type file gambar 3pg /png /gif</span><br>
        <span class="text-sm">width = height</span><br>
        <button type="reset" class="reset">
    <i class="reset"></i>Reset</button>
    <button type="submit" name= "simpan" class="submit">
    <i class="submit"></i>simpan</button>

</div><br>

   
    <div class="col-lg-8">
        
    <div class="form-group mb-3">
            <label for="dokter" class="form-label">Kode dokter</label>
            <input type="text" name="kddokter" class="form-control"
            id="kd dokter" placeholder="kode dokter" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="poli" class="form-label">kode poli</label>
            <input type="text" name="kode poli" class="form-control"
            id="kd poli" placeholder="masukan kode poli" autocomplate="off" autofocus required>
</div>
        <div class="form-group mb-3">
            <label for="kunjungan" class="form-label">tanggal kunjungan</label>
            <input type="date" name="kunjungan" class="form-control"
            id="utgk kunjungan" placeholder="tanggal kunjungan" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="username" class="form-label">kode user</label>
            <input type="text" name="username" class="form-control"
            id="username" placeholder="masukan username" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="nama dokter" class="form-label">nama dokter</label>
            <input type="text" name="dokter" class="form-control"
            id="kd dokter" placeholder="masukan nama dokter" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="sip" class="form-label">SIP</label>
            <input type="text" name="sip" class="form-control"
            id="sip" placeholder="masukan sip" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="ttl" class="form-label">tempat lahir</label>
            <input type="text" name="ttl" class="form-control"
            id="ttl" placeholder="masukan tempat lahir" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="tlp" class="form-label">no telp</label>
            <input type="tlp" name="notelp" class="form-control"
            id="tlp" placeholder="masukan no telp" autocomplate="off" autofocus required>
</div>
<div class="form-group mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" name="alamat" class="form-control"
            id="alamat" placeholder="masukan alamat" autocomplate="off" autofocus required>
</div>
</form>

</div><br>

<script>
    function imgVIEW() {
        let gambar = document.getElementById('img');
        let tampil = document.querySelector('tampil');

        let fileReader = new FileReader();
        fileReader.readAsDataURL(img.files[0]);

        fileReader.addEventListener('load', (e) => {
            tampil.src = e.target.result;
        })
    }
</script>