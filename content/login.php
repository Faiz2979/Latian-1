<?php
include "../main/bfheader.php";
?>
<body class="bg-dark bg-img-home">
<div class="container">
<div class="overlay"></div>
    <div class="login-box">
        <h2>Login Pegawai</h2>
        <form action="../pr/pr_login.php" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <button type="submit" class="btn btn-login">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="register.php" class="text-white">Register</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

