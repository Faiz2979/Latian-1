<?php
    include "../main/header.php";
?>


<div class="container">
<form action="../pr/pr_jabatan.php" method="post">
    <h3>Nama Jabatan</h3>
    <input type="text" name="jabatan" value="" class="form-control">
    <br>
    <h3>Gaji Pokok</h3>
    <input type="text" name="gaji" value="" class="form-control">
    <br>
    <h3>Tunjangan</h3>
    <input type="text" name="tunjangan" value="" class="form-control">
    <br>
    <center>
    <button type="submit" name="simpan" value="Tambah Jabatan" class="btn btn-kirim">Simpan</button>
</center>
</form>
</div>

<?php 
    include "../main/footer.php";
?>