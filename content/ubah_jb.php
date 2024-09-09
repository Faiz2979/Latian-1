<?php
include "../main/bfheader.php";
include "../main/konek.php";
    $qry_get_jabatan=mysqli_query($konek,"select * from jabatan where id_jabatan = '".$_GET['id_jabatan']."'");
    $dt_jabatan=mysqli_fetch_array($qry_get_jabatan);
?>
<br>
<div class="container">
<form action="../pr/pr_ubah_jb.php" method="post" >
    <center>
        <h1 >Atur Akun</h1>

    </center>
    <input type="hidden" name="id_jabatan" value="<?=$dt_jabatan['id_jabatan']?>">
    <br>
    <br>
    <h3>Nama Jabatan</h3>
    <input type="text" name="jabatan" value="<?=$dt_jabatan['nama_jabatan']?>" class="form-control">
    <br>
    <h3>Gaji Pokok</h3>
    <input type="text" name="gaji_pokok" value="<?=$dt_jabatan['gaji_pokok']?>" class="form-control">

    <br>
    <h3>Tunjangan</h3>
    <input type="text" name="tunjangan" value="<?=$dt_jabatan['tunjangan']?>" class="form-control">

    <br>
    <center>
        <button type="submit" name="simpan" value="Tambah Buku" class="btn btn-kirim">Simpan</button>
    </center>
</form>
<?php
include "../main/footer.php";
?>