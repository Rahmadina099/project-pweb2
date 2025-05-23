<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: halaman_login.php");
    exit;
}


?>

<?php include('tamplate/header.php'); ?>
<?php include('tamplate/sidebar.php'); ?>
<?php include('tamplate/sidebarpasien.php'); ?>
<?php include('tamplate/sidebardokter.php'); ?>

<div class="content">
   

    <?php include('tamplate/blank.php'); ?>
</div>

<?php include('tamplate/footer.php'); ?>
