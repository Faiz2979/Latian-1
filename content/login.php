<?php
include "../main/bfheader.php";
?>
<body class="bg-dark">
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-succes" style="padding:10px">
        <form action="../pr/pr_login.php" method="post">
          <h2 style="color: white;" align="center">Login Pegawai</h2>
          <h4 style="color:white">Username</h4>
          <input type="text" name="username" value="" class="form-control">

          <br>
          <h4 style="color:white">Password</h4>
          <input type="password" name="password" class="form-control"><br>
          <br>
          <center><input type="submit" name="login" class="btn btn-kirim" value="LOGIN"></center>
        </form>
        <center>
          <a href="register.php" class="btn regis">Register</a>
        </center>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

