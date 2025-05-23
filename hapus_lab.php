<?php
include('koneksi.php');
$kd_lab = $_GET['kd_lab'];

$sql = "DELETE FROM laboratorium WHERE kd_lab='$kd_lab'";
$delete = mysqli_query($koneksidb, $sql);

if($delete){
    echo "<script>alert('Data berhasil dihapus'); window.location='data_lab.php';</script>";
} else {
    echo "Gagal hapus: " . mysqli_error($koneksidb);
}
