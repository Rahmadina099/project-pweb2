<?php
include('koneksi.php');
$no_pasien = $_GET['no_pasien'];

$sql = "DELETE FROM pasien WHERE no_pasien='$no_pasien'";
$delete = mysqli_query($koneksidb, $sql);

if($delete){
    echo "<script>alert('Data berhasil dihapus'); window.location='data_pasien.php';</script>";
} else {
    echo "Gagal hapus: " . mysqli_error($koneksidb);
}
