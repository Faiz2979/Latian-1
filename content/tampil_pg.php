<?php
    include "../main/header.php";
?>
<div class="container-fluid container rounded">

    <h3>Daftar Pegawai</h3>
    <table class="table table-hover " id="tabel">
        <thead class="table-info">
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA PEGAWAI</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>NO TELEPON</th>
                <th>JABATAN</th>
                <th>USERNAME</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "../main/konek.php";
            $qry_jabatan=mysqli_query($konek,"select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan");
            $no=0;
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
            $no++;?>
<tr>              
    <td><?=$no?></td>
    <td><?=$data_jabatan['nik']?></td> 
    <td><?=$data_jabatan['nama']?></td> 
    <td><?=$data_jabatan['alamat']?></td>
    <td><?=$data_jabatan['jk']?></td> 
    <td><?=$data_jabatan['tlp']?></td> 
    <td><?=$data_jabatan['nama_jabatan']?></td> 
    <td><?=$data_jabatan['username']?></td> 
    <td><a href="ubah_pg.php?id_pegawai=<?=$data_jabatan['id_pegawai']?>" class="btn btn-atur-1">Ubah</a> | <a href="../pr/hapus_pg.php?id_pegawai=<?=$data_jabatan['id_pegawai']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-atur-2">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        
    </div>