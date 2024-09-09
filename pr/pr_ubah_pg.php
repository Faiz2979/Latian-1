<html>
    <head>
        <meta http-equiv="refresh" content="2; URL=../content/tampil_pg.php" />
    </head>

    <body>
    <?php
    if($_POST){
        $id_pegawai=$_POST['id_pegawai'];
    $gaji=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $no_telp=$_POST['tlp'];
    $jabatan=$_POST['id_jabatan'];
    if(empty($gaji)){
        echo "<script>alert('Nama Tidak Boleh Kosong')</script>; location.href='../content/ubah_pg.php'";
    }elseif(empty($alamat)){
        echo "<script>alert('Alamat Tidak Boleh Kosong')</script>; location.href='../content/ubah_pg.php'";
    }
    elseif(empty($gender)){
        echo "<script>alert('Jenis Kelamin Tidak Boleh Kosong')</script>; location.href='../content/ubah_pg.php'";
    }
    elseif(empty($alamat)){
        echo "<script>alert('Alamat Tidak Boleh Kosong')</script>; location.href='../content/ubah_pg.php'";
    }
    elseif(empty($no_telp)){
        echo "<script>alert('Nomor Telepon Tidak Boleh Kosong')</script>; location.href='../content/ubah_pg.php'";
    }
    else{
        include "../main/konek.php";
        $sql="update pegawai set nik='".$gaji."',nama='".$nama."',alamat='".$alamat."',jk='".$gender."',tlp='".$no_telp."',id_jabatan='".$jabatan." ' where id_pegawai='".$id_pegawai."'";
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