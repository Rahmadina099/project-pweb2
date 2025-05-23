<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>

<?php
include('koneksi.php'); 


$kd_tindakan   = $_POST['kd_tindakan'];
$nama_tindakan = $_POST['nama_tindakan'];
$ket  = $_POST['ket'];



echo "<table border='1' cellpadding='8'>";
echo "<tr><td>Kode Tindakan</td><td>$kd_tindakan</td></tr>";
echo "<tr><td>Nama Tindakan </td><td>$nama_tindakan</td></tr>";
echo "<tr><td>Keterangan</td><td>$ket</td></tr>";


if (!empty($kd_tindakan) && !empty($nama_tindakan) && !empty($ket) ) {

    
    $sql = "INSERT INTO tindakan ( kd_tindakan, nama_tindakan, ket)
            VALUES ( '$kd_tindakan', '$nama_tindakan', '$ket')";

    $hasil = mysqli_query($koneksidb, $sql);

    if ($hasil) {
        echo "<tr><td colspan='2'><strong>Data berhasil disimpan!</strong></td></tr>";
        echo "<script type='text/javascript'>
            alert('Data Anda telah disimpan.');
            window.location.href = 'data_tindakan.php';
        </script>";
    } else {
        echo "<tr><td colspan='2'><strong>Data gagal disimpan: " . mysqli_error($koneksidb) . "</strong></td></tr>";
    }

} else {
    echo "<tr><td colspan='2'><strong>Data masih ada yang kosong. Silakan lengkapi!</strong></td></tr>";
}
echo "</table>";
?>
