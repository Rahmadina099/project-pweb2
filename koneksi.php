<?php 
$server   = "localhost";
$database = "db_rekamedis";
$username = "root";
$password = "";


$koneksidb = mysqli_connect($server, $username, $password, $database);


if (!$koneksidb) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


?>
