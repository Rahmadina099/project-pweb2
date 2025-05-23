<?php
session_start();
session_destroy();

?>
<script type="text/javascript">
    alert('selamat, anda berhasil logut.');
    location.href = "halaman_login.php";
</script>