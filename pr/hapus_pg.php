<?php 
    if($_GET['id_pegawai']){
        include "../main/konek.php";
        $qry_hapus=mysqli_query($konek,"delete from pegawai where id_pegawai='".$_GET['id_pegawai']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Pecat Pegawai');location.href='../content/tampil_pg.php';</script>";
        } else {
            echo "<script>alert('Gagal Pecat Pegawai');location.href='../content/tampil_pg.php';</script>";
        }
    }
?>
