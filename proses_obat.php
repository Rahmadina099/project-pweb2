<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebar.php'); ?>

<?php
include('koneksi.php'); 


$kd_obat   = $_POST['kd_obat'];
$nama_obat = $_POST['nama_obat'];
$jml_obat  = $_POST['jml_obat'];
$ukuran    = $_POST['ukuran'];
$harga     = $_POST['harga'];



echo "<table border='1' cellpadding='8'>";
echo "<tr><td>Kode Obat</td><td>$kd_obat</td></tr>";
echo "<tr><td>Nama Obat</td><td>$nama_obat</td></tr>";
echo "<tr><td>Jumlah Obat</td><td>$jml_obat</td></tr>";
echo "<tr><td>Ukuran</td><td>$ukuran</td></tr>";
echo "<tr><td>Harga Lahir</td><td>$harga</td></tr>";


if (!empty($kd_obat) && !empty($nama_obat) && !empty($jml_obat) &&
    !empty($ukuran) && !empty($harga) ) {

    
    $sql = "INSERT INTO obat ( kd_obat, nama_obat, jml_obat, ukuran, harga)
            VALUES ( '$kd_obat', '$nama_obat', '$jml_obat', '$ukuran', '$harga')";

    $hasil = mysqli_query($koneksidb, $sql);

    if ($hasil) {
        echo "<tr><td colspan='2'><strong>Data berhasil disimpan!</strong></td></tr>";
        echo "<script type='text/javascript'>
            alert('Data Anda telah disimpan.');
            window.location.href = 'data_obat.php';
        </script>";
    } else {
        echo "<tr><td colspan='2'><strong>Data gagal disimpan: " . mysqli_error($koneksidb) . "</strong></td></tr>";
    }

} else {
    echo "<tr><td colspan='2'><strong>Data masih ada yang kosong. Silakan lengkapi!</strong></td></tr>";
}
echo "</table>";
?>
