<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='../content/login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='../content/login.php';</script>";
        } else {
            include "../main/konek.php";
            $qry_login=mysqli_query($konek,"select * from pegawai where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_pegawai']=$dt_login['id_pegawai'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_login']=true;
                header("location: ../content/home.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='../content/login.php';</script>";
            }
        }
    }
?>
