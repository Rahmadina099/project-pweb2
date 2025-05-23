<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebar.php'); ?>

<?php
include('koneksi.php'); 


$nama_pasien = $_POST['namapasien'];
$jk          = $_POST['jk'];
$agama       = $_POST['agama'];
$alamat      = $_POST['alamat'];
$tgl_lahir   = $_POST['tgl'];
$usia        = $_POST['usia'];
$no_telp     = $_POST['notelp'];
$nama_kk     = $_POST['namakk'];
$hub_kel     = $_POST['hubkel'];


echo "<table border='1' cellpadding='8'>";
echo "<tr><td>Nama Pasien</td><td>$nama_pasien</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Agama</td><td>$agama</td></tr>";
echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
echo "<tr><td>Tanggal Lahir</td><td>$tgl_lahir</td></tr>";
echo "<tr><td>Usia</td><td>$usia</td></tr>";
echo "<tr><td>No. Telp</td><td>$no_telp</td></tr>";
echo "<tr><td>Nama KK</td><td>$nama_kk</td></tr>";
echo "<tr><td>Hubungan Keluarga</td><td>$hub_kel</td></tr>";


if (!empty($nama_pasien) && !empty($jk) && !empty($agama) &&
    !empty($alamat) && !empty($tgl_lahir) && !empty($usia) && !empty($no_telp) &&
    !empty($nama_kk) && !empty($hub_kel)) {

    
    $sql = "INSERT INTO pasien ( nama_pasien, jk, agama, alamat, tgl_lahir, usia, no_telp, nama_kk, hub_kel)
            VALUES ( '$nama_pasien', '$jk', '$agama', '$alamat', '$tgl_lahir', '$usia', '$no_telp', '$nama_kk', '$hub_kel')";

    $hasil = mysqli_query($koneksidb, $sql);

    if ($hasil) {
        echo "<tr><td colspan='2'><strong>Data berhasil disimpan!</strong></td></tr>";
        echo "<script type='text/javascript'>
            alert('Data Anda telah disimpan.');
            window.location.href = 'data_pasien.php';
        </script>";
    } else {
        echo "<tr><td colspan='2'><strong>Data gagal disimpan: " . mysqli_error($koneksidb) . "</strong></td></tr>";
    }

} else {
    echo "<tr><td colspan='2'><strong>Data masih ada yang kosong. Silakan lengkapi!</strong></td></tr>";
}
echo "</table>";
?>
