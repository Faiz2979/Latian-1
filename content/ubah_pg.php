<?php
include "../main/bfheader.php";
include "../main/konek.php";
    $qry_get_jabatan=mysqli_query($konek,"select * from pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $dt_jabatan=mysqli_fetch_array($qry_get_jabatan);
?>
<br>
<div class="container">
<form action="../pr/pr_ubah_pg.php" method="post" >
    <center>
        <h1 >Atur Akun</h1>

    </center>
    <input type="hidden" name="id_pegawai" value="<?=$dt_jabatan['id_pegawai']?>"
    <br>
    <br>
    <h3>NIK</h3>
    <br>
    <input type="text" name="nik" value="<?=$dt_jabatan['nik']?>" class="form-control">
    <br>
    <h3>Nama</h3>
    <input type="text" name="nama" value="<?=$dt_jabatan['nama']?>" class="form-control">
    
    <br>
    <h3>Alamat</h3>
    <input type="text" name="alamat" value="<?=$dt_jabatan['alamat']?>" class="form-control">

    <br>
    <h3>Jenis Kelamin</h3>
    <input type="radio" name="gender" value="L" class="form-check-input">
    <h4>Laki-Laki</h4>
    <input type="radio" name="gender" value="P" class="form-check-input">
    <h4>Perempuan</h4>
    <br>
    <br>
    <h3>No Telepon</h3>
    <input type="tel" name="tlp" value="<?=$dt_jabatan['tlp']?>" class="form-control">

    <br>
    <h3>Jabatan</h3>
    <select name="id_jabatan" class="form-control">
        <?php 
            $qry_jabatan=mysqli_query($konek,"select * from jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                if($data_jabatan['id_jabatan']==$dt_siswa['id_jabatan']){
                    $selek="selected";
                } else {
                    $selek="";
                }
                echo '<option value="'.$data_jabatan['id_jabatan'].'" '.$selek.'>'.$data_jabatan['nama_jabatan'].'</option>';   
            }
            ?>
            <option></option>
        </select>
        <br>
        <br>
        
            <br>
            <br>
    <center>

        <button type="submit" name="simpan" value="Tambah Buku" class="btn btn-kirim">Simpan</button>
    </center>
</form>
<?php
include "../main/footer.php";
?>