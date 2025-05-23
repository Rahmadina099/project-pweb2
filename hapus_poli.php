<?php
include('koneksi.php');
$kd_poli = $_GET['kd_poli'];

$sql = "DELETE FROM poliklinik WHERE kd_poli='$kd_poli'";
$delete = mysqli_query($koneksidb, $sql);

if($delete){
    echo "<script>alert('Data berhasil dihapus'); window.location='data_poli.php';</script>";
} else {
    echo "Gagal hapus: " . mysqli_error($koneksidb);
}
