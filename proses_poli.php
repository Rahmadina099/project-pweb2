<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebar.php'); ?>

<?php
include('koneksi.php'); 


$kd_poli   = $_POST['kd_poli'];
$nama_poli = $_POST['nama_poli'];
$lantai  = $_POST['lantai'];



echo "<table border='1' cellpadding='8'>";
echo "<tr><td>Kode Poliklinik</td><td>$kd_poli</td></tr>";
echo "<tr><td>Nama Poliklinik</td><td>$nama_poli</td></tr>";
echo "<tr><td>lantai</td><td>$lantai</td></tr>";


if (!empty($kd_poli) && !empty($nama_poli) && !empty($lantai) ) {

    
    $sql = "INSERT INTO poliklinik ( kd_poli, nama_poli, lantai)
            VALUES ( '$kd_poli', '$nama_poli', '$lantai')";

    $hasil = mysqli_query($koneksidb, $sql);

    if ($hasil) {
        echo "<tr><td colspan='2'><strong>Data berhasil disimpan!</strong></td></tr>";
        echo "<script type='text/javascript'>
            alert('Data Anda telah disimpan.');
            window.location.href = 'data_poli.php';
        </script>";
    } else {
        echo "<tr><td colspan='2'><strong>Data gagal disimpan: " . mysqli_error($koneksidb) . "</strong></td></tr>";
    }

} else {
    echo "<tr><td colspan='2'><strong>Data masih ada yang kosong. Silakan lengkapi!</strong></td></tr>";
}
echo "</table>";
?>
