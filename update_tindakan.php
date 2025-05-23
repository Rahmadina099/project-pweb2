<?php
include('koneksi.php');

$kd_tindakan = $_POST['kd_tindakan'];
$nama_tindakan = $_POST['nama_tindakan'];
$ket = $_POST['ket'];

$sql = "UPDATE tindakan SET nama_tindakan='$nama_tindakan', ket='$ket' WHERE kd_poli='$kd_tindakan'";
$update = mysqli_query($koneksidb, $sql);

if($update){
    echo "<script>alert('Data berhasil diupdate'); window.location='data_tindakan.php';</script>";
} else {
    echo "Gagal update: " . mysqli_error($koneksidb);
}
