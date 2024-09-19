<?php
include "../main/header.php";

echo $_SESSION['status_login'];
echo $_SESSION['nama'];
?>
<div class="container">
    <h1>Home</h1>
    <p>Selamat Datang di Halaman Home</p>
    <p>Anda Login Sebagai <?php echo $_SESSION['nama']; ?></p>
    <p>Anda Login Sebagai <?php echo $_SESSION['status_login']; ?></p>
    <p>Anda Login Sebagai <?php echo $_SESSION['id_pegawai']; ?></p>
</div>