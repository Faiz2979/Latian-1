<html>
    <head>
        <meta http-equiv="refresh" content="2; URL=../content/tampil_jb.php" />
    </head>

    <body>
    <?php
    if($_POST){
        $idjabatan=$_POST['id_jabatan'];
        $jabatan=$_POST['jabatan'];
    $gaji=$_POST['gaji_pokok'];
    $tunjangan=$_POST['tunjangan'];

    if(empty($gaji)){
        echo "<script>alert('Gaji Tidak Boleh Kosong')</script>; location.href='../content/ubah_pg.php'";
    }elseif(empty($jabatan)){
        echo "<script>alert('Tolong Buat Nama Jabatan')</script>; location.href='../content/ubah_pg.php'";
    }
    elseif(empty($idjabatan)){
        echo "<script>alert(' Pegawai Tidak Dikenali')</script>; location.href='../content/ubah_pg.php'";
    }
    else{
        include "../main/konek.php";
        $sql="update jabatan set nama_jabatan='".$jabatan."',gaji_pokok='".$gaji."',tunjangan='".$tunjangan."' where id_jabatan='".$idjabatan."'";
        if(mysqli_query($konek,$sql)){
            echo "Data Berhasil Diubah";
        }else{
            echo "Data Gagal Diubah";
        
        }
    }
    }
    ?>
        
    </body>
</html>