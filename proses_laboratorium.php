<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>
<?php include('koneksi.php'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Proses Simpan Laboratorium</h1>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <?php
                // Ambil data dari form POST
                $kd_lab    = $_POST['kd_lab'];
                $no_rm     = $_POST['no_rm'];
                $hasil_lab = $_POST['hasil_lab'];
                $ket       = $_POST['ket'];

                echo "<table class='table table-bordered'>";
                echo "<tr><td>Kode Lab</td><td>$kd_lab</td></tr>";
                echo "<tr><td>No Rekam Medis</td><td>$no_rm</td></tr>";
                echo "<tr><td>Hasil Lab</td><td>$hasil_lab</td></tr>";
                echo "<tr><td>Keterangan</td><td>$ket</td></tr>";

                // Validasi form tidak boleh kosong
                if (!empty($kd_lab) && !empty($no_rm) && !empty($hasil_lab) && !empty($ket)) {

                    // Cek apakah no_rm ada di tabel rekam_medis
                    $cek_pasien = mysqli_query($koneksidb, "SELECT * FROM rekam_medis WHERE no_rm = '$no_rm'");
                    if (mysqli_num_rows($cek_pasien) > 0) {

                        // Simpan ke tabel laboratorium
                        $sql = "INSERT INTO laboratorium (kd_lab, no_rm, hasil_lab, ket)
                                VALUES ('$kd_lab', '$no_rm', '$hasil_lab', '$ket')";
                        $hasil = mysqli_query($koneksidb, $sql);

                        if ($hasil) {
                            echo "<tr><td colspan='2'><strong>✅ Data berhasil disimpan!</strong></td></tr>";
                            echo "<script type='text/javascript'>
                                    alert('Data berhasil disimpan!');
                                    window.location.href = 'data_lab.php';
                                  </script>";
                        } else {
                            echo "<tr><td colspan='2'><strong> Gagal menyimpan: " . mysqli_error($koneksidb) . "</strong></td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'><strong>No Rekam Medis tidak ditemukan di tabel rekam_medis!</strong></td></tr>";
                    }

                } else {
                    echo "<tr><td colspan='2'><strong> Semua field wajib diisi!</strong></td></tr>";
                }

                echo "</table>";
                ?>
            </div>
        </div>
    </section>
</div>

<?php include('tamplate/footer.php'); ?>
