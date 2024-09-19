
<?php
session_start();
include "bfheader.php";
if ($_SESSION['status_login'] != true) {
  header('location: ../content/login.php'); 
}
?>
<body class="index-page tampil">

  <div id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="home.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Owh</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <!-- <li><a href="buku.php">Buku</a></li> -->
          <!-- <li><a href="histori_peminjaman.php">Histori</a></li> -->
          <li class="dropdown"><a href="#"><span>Tampil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="tampil_pg.php">Pegawai</a></li>
              <li><a href="tampil_jb.php">Jabatan </a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="../main/logout.php">Logout</a>

    </div>
  </div>

