<?php 

session_start();
if(!isset ($_SESSION["admin"])){
    header("Location: userSP/");
    exit;
}

include "import/functions.php";
include "import/header.php";
include "import/navbar.php";
include "import/modals.php";
$siswa = query("SELECT * FROM data_pelanggaran order by id desc")
 ?>

<div class="container-fluid">
	<div class="card">
      <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark text-center" style="font-size:40px;">Data Pelanggaran</h6>
            </div>
		  <div class="card-body">
      
<a href="cetak.php" class="btn btn-secondary" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak</a>
<br>
        <br>
		  	   <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>NISN</td>
                      <td>Nama</td>
                      <td>Kesalahan</td>
                      <td>Pelapor</td>
                      <td>Tanggal Masuk</td>
                      <td>Waktu</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i =1 ;
                  foreach ($siswa as $isi ):?>
                    <tr>
                    <td><?=$i?></td>
                    <td><?=$isi["nisn"];?></td>
                    <td><?=$isi["nama"];?></td>
                    <td><?=$isi["kesalahan"];?></td>
                    <td><?=$isi["pelapor"];?></td>
                    <td><?=date('d F Y', strtotime($isi["tgl_masuk"])); ?></td>
                    <td><?=$isi["waktu_masuk"];?></td>
                    <td><a href="import/hapus2.php?id=<?=$isi["id"];?>" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a></td>
                    </tr>
                  <?php
                  $i++;
                   endforeach; ?>
</tbody>
                </table>
		  </div>

	</div>
</div>

 <?php  
include "import/footer.php";
 ?>