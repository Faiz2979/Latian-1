<html>
    <head>
        <meta http-equiv="refresh" content="2; URL=../content/login.php" />
    </head>

    <body>
    <?php
    if($_POST){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $no_telp=$_POST['no'];
    $jabatan=$_POST['id_jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nik)){
        echo "<script>alert('Nama Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }elseif(empty($alamat)){
        echo "<script>alert('Alamat Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }
    elseif(empty($gender)){
        echo "<script>alert('Jenis Kelamin Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }
    elseif(empty($alamat)){
        echo "<script>alert('Alamat Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }
    elseif(empty($no_telp)){
        echo "<script>alert('Nomor Telepon Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }
    elseif(empty($username)){
        echo "<script>alert('Username Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }
    elseif(empty($password)){
        echo "<script>alert('Password Tidak Boleh Kosong')</script>; location.href='../content/register.php'";
    }
    else{
        include "../main/konek.php";
        $sql="INSERT INTO pegawai(nik,nama,alamat,jk,tlp,id_jabatan,username,password) VALUES ('".$nik."','".$nama."','".$alamat."','".$gender."','".$no_telp."','".$jabatan."','".$username."','".md5($password)."')";
        if(mysqli_query($konek,$sql)){
            echo "Data Berhasil Disimpan";
        }else{
            echo "Data Gagal Disimpan";
        }
    }
    }
    ?>
        
    </body>
</html>