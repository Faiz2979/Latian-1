<?php 
    if($_GET['id_jabatan']){
        include "../main/konek.php";
        $qry_hapus=mysqli_query($konek,"delete from jabatan where id_jabatan='".$_GET['id_jabatan']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Hapus Jabatan');location.href='../content/tampil_jb.php';</script>";
        } else {
            echo "<script>alert('Gagal Hapus Jabatan');location.href='../content/tampil_jb.php';</script>";
        }
    }
?>
