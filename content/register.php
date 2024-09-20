<?php
include "../main/bfheader.php";
?>
<br>
<div class="container">
<form action="../pr/pr_register.php" method="post" >
    <center>
        <h1 >Buat Akun</h1>

    </center>
    <h3>NIK</h3>
    <br>
    <input type="text" name="nik" value="" class="form-control">
    <br>
    <h3>Nama</h3>
    <input type="text" name="nama" value="" class="form-control">
    <br>
    <h3>Alamat</h3>
    <input type="text" name="alamat" value="" class="form-control">
    <br>
    <h3>Jenis Kelamin</h3>
    <span></span>
    <input type="radio" name="gender" value="L" class="form-check-input">
    <h4>Laki-Laki</h4>
    <input type="radio" name="gender" value="P" class="form-check-input">
    <h4>Perempuan</h4>
    <br>
    <br>
    <h3>No Telepon</h3>
    <input type="tel" name="no" value="" class="form-control">
    <br>
    <h3>Jabatan</h3>
    <select name="id_jabatan" class="form-control">
        <option></option>
        <?php 
            include "../main/konek.php";
            $qry_jabatan=mysqli_query($konek,"select * from jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';    
            }
            ?>
        </select>
        <br>
        <br>
        <h3>Username</h3>
        <input type="text" name="username" value="" class="form-control">
        <br>
        <h3>Password</h3>
        <input type="text" name="password" value="" class="form-control">
            <br>
            <br>
    <center>

        <button type="submit" name="simpan" value="Tambah Buku" class="btn btn-kirim">Simpan</button>
    </center>
</form>
<?php
include "../main/footer.php";
?>