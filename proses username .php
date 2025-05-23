<?php

require "../config.php";


if(isset($_POST ('simpan'))) {
    $tglkunjungan = trim(htmlspesialchars($_POST['kunjungan']));
    $namadokter = trim(htmlspesialchars($_POST['dokter']));
    $sip = trim(htmlspesialchars($_POST['sip']));
    $ttl= trim(htmlspesialchars($_POST['ttl']));
    $notelp = trim(htmlspesialchars($_POST['notelp']));
    $alamat = trim(htmlspesialchars($_POST['alamat']));
    $gambar = htmlspecialchars($_FILES['img']['name']);

    $cekprofildokter  = mysqli_query($koneksi, "SELECT * from dokter WHERE nama dokter = '$namadokter'");
    if(mysqli_num_row($cekprofildokter)) {
        echo "<script>
        alert('nama dokter sudah terpakai');
        window.location = 'tambah-user.php';        
        </script>";
        return;
    }

    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai ');
        window.location = 'tambah-user.php';        
        </script>";
        return;
    }

    $pass = password_hash($password, PASSWORD_DEFAULT);
    
    if ($gambar != null) {
        $url 'tambah-user.php';
        $gambar = uploadGbr($url);
    }else{
        $gambar = 'user.png';
    }
}

?>