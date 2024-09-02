<html>
    <head>
    <meta http-equiv="refresh" content="2; URL=../content/tampil_jb.php" />
    </head>
    <body>
        
<?php
if($_POST){
    $nama_jabatan=$_POST['jabatan'];
    $gaji=$_POST['gaji'];
    $tunjangan=$_POST['tunjangan'];
    if(empty($nama_jabatan)){
        echo "<script>alert('Nama Jabatan tidak boleh kosong');location.href='../content/tampil_jb.php';</script>";

    } elseif(empty($gaji)){
        echo "<script>alert('Gaji Pokok tidak boleh kosong');location.href='../content/tampil_jb.php';</script>";
    } else {
        include "../main/konek.php";
        $insert=mysqli_query($konek,"insert into jabatan (nama_jabatan, gaji_pokok,tunjangan) value ('".$nama_jabatan."','".$gaji."','".$tunjangan."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Jabatan');location.href='../content/tampil_jb.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Jabatan');location.href='../content/tampil_jb.php';</script>";
        }
    }
}
?>