<?php
include('koneksi.php');
$kd_tindakan = $_GET['kd_tindakan'];

$sql = "DELETE FROM tindakan WHERE kd_tindakan='$kd_tindakan'";
$delete = mysqli_query($koneksidb, $sql);

if($delete){
    echo "<script>alert('Data berhasil dihapus'); window.location='data_tindakan.php';</script>";
} else {
    echo "Gagal hapus: " . mysqli_error($koneksidb);
}
