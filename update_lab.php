<?php
include('koneksi.php');

$kd_lab = $_POST['kd_lab'];
$hasil_lab = $_POST['hasil_lab'];
$ket = $_POST['ket'];

$sql = "UPDATE laboratorium SET hasil_lab='$hasil_lab', ket='$ket' WHERE kd_lab='$kd_lab'";
$update = mysqli_query($koneksidb, $sql);

if($update){
    echo "<script>alert('Data berhasil diupdate'); window.location='data_lab.php';</script>";
} else {
    echo "Gagal update: " . mysqli_error($koneksidb);
}
