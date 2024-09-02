<?php
    include "../main/header.php";
?>
<div class="container-fluid container rounded">

    <h3>Daftar Jabatan</h3>
    <div>

        <table class="table table-hover " id="tabel">
            <thead class="table-info">
                <tr>
                    <th>NO</th>
                    <th>NAMA JABATAN</th>
                    <th>GAJI POKOK</th>
                    <th>TUNJANGAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "../main/konek.php";
                $qry_jabatan=mysqli_query($konek,"select * from jabatan");
                $no=0;
                while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                $no++;?>
    <tr>              
        <td><?=$no?></td>
        <td><?=$data_jabatan['nama_jabatan']?></td> 
        <td><?=$data_jabatan['gaji_pokok']?></td> 
        <td><?=$data_jabatan['tunjangan']?></td>
        <td><a href="ubah_jb.php?id_jabatan=<?=$data_jabatan['id_jabatan']?>" class="btn btn-atur-1">Ubah</a> | <a href="../pr/hapus_jb.php?id_jabatan=<?=$data_jabatan['id_jabatan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-atur-2">Hapus</a></td>
    
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
        
    <div>
        <center>

            <a href="tambah_jb.php" class="btn btn-atur-1">Tambah Jabatan</a>
        </center>
    </div>
    </div>