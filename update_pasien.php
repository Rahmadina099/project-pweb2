<?php
include('koneksi.php');

$no_pasien   = $_POST['no_pasien'];
$nama        = $_POST['namapasien'];
$jk          = $_POST['jk'];
$agama       = $_POST['agama'];
$alamat      = $_POST['alamat'];
$tgl_lahir   = $_POST['tgl'];
$usia        = $_POST['usia'];
$notelp      = $_POST['notelp'];
$namakk      = $_POST['namakk'];
$hubkel      = $_POST['hubkel'];

$sql = "UPDATE pasien SET
        nama_pasien = '$nama',
        jk = '$jk',
        agama = '$agama',
        alamat = '$alamat',
        tgl_lahir = '$tgl_lahir',
        usia = '$usia',
        no_telp = '$notelp',
        nama_kk = '$namakk',
        hub_kel = '$hubkel'
        WHERE no_pasien = '$no_pasien'";

$query = mysqli_query($koneksidb, $sql);

if ($query) {
    echo "<script>alert('Data berhasil diperbarui'); window.location.href='data_pasien.php';</script>";
} else {
    echo "<script>alert('Gagal memperbarui data'); window.history.back();</script>";
}
?>
