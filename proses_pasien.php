<?php include('tamplate/header.php') ?>
<?php include('tamplate/sidebarpasien.php') ?>
<?php
include('koneksi.php');
echo "<table border=1>";
$no_pasien=$_POST['no_pasien'];
$nama_pasien=$_POST['namapasien'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$tgl = $_POST['tgl'];
$usia = $_POST['usia'];
$notelp = $_POST['notelp'];
$namakk= $_POST['namakk'];
$hubkel = $_POST['hubkel'];



echo "<tr><td>No Pasien <td>$no_pasien";
echo "<tr><td>Nama pasien <td>$nama_pasien";
echo "<tr><td>Jenis kelamin<td>$jk";
echo "<tr><td>Agama <td>$agama";
echo "<tr><td>Alamat <td>$alamat";
echo "<tr><td>Tanggal lahir <td>$tgl";
echo "<tr><td>Usia <td>$usia";
echo "<tr><td>No.telp <td>$notelp";
echo "<tr><td>Namakk <td>$namakk";
echo "<tr><td>Hub kel <td>$hubkel";

if (($no_pasien!="")&&($nama_pasien!="")&&($jk!="")&&($agama!="")&&($alamat!="")&&($tgl!="")&&($usia!="")&&($notelp!="")&&($namakk!="")&&($hubkel!="")){
    $sql="insert into db_rekamedis(no_pasien, nama_pasien, jk, agama, alamat, tgl_lahir, usia, no_telp, nama_kk, hub_kel)
    values('$no_pasien','$nama_pasien','$jk','$agama','$alamat','$tgl','$usia','$notelp','$namakk','$hubkel', now())";
    $hasil = mysqli_query($koneksidb,$sql);
    if($hasil){
        echo"<tr><td colspan=2>Data Telah Disimpan!";
    }else{
        echo"<tr><td colspan=2>Data Gagal Disimpan";
    }
}else{
    echo"<tr><td colspan=2>Data Masih Kosong!";
}


?>