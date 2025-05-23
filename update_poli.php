<?php
include('koneksi.php');

$kd_poli = $_POST['kd_poli'];
$nama_poli = $_POST['nama_poli'];
$lantai = $_POST['lantai'];

$sql = "UPDATE poliklinik SET nama_poli='$nama_poli', lantai='$lantai' WHERE kd_poli='$kd_poli'";
$update = mysqli_query($koneksidb, $sql);

if($update){
    echo "<script>alert('Data berhasil diupdate'); window.location='data_poli.php';</script>";
} else {
    echo "Gagal update: " . mysqli_error($koneksidb);
}
