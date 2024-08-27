<?php 
session_start();
if(!isset ($_SESSION["admin"])){
    header("Location: userSP/");
    exit;
}

        require 'import/functions.php';
        include "import/header.php";
        

   
     $siswa = query("SELECT * FROM siswa ORDER BY nisn");

    $i=1;


if(isset($_POST["tambahuser"])){

        if(tambah($_POST) > 0){
            echo "
                <script>
                alert('Data berhasil DI tambahkan!');
                document.location.href = 'datasiswa.php';
                </script>
            ";} else{
            echo "
            <script> 
                alert('data GAGAL di tambahkan!');
              </script>
       
        ";}

        
}
if (isset($_POST["resetpoint"])) {
  if (resetpoint(100) > 0) {
hapusData();
    echo "
                <script>
                alert('Point Berhaasil di Reset!');
                document.location.href = 'datasiswa.php';
                </script>
            ";
  }
  else {
    echo "
                <script>
                alert('Anda Sudah Mereset Point');
                document.location.href = 'datasiswa.php';
                </script>
            ";
  }
}

    include "import/navbar.php";

?>

        <div class="container-fluid">

    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark text-center" style="font-size:40px;">Data Siswa</h6>
            </div>
      
            <div class="card-body">
      
            <button class="btn btn-success" data-toggle="modal" data-target="#modaltambah"><i class="fas fa-plus"></i> &nbsp;Tambah Siswa</button>
           <button class="btn btn-warning" data-toggle="modal" data-target="#resetPoint"><i class="fas fa-redo"></i> &nbsp;Reset Point</button>

          <br><br>
      
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th class="text-center">Gambar</th>
                      <th class="text-center">NISN</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Kelas</th>
                      <th class="text-center">Password</th>
                      <th class="text-center">Total Point</th>
                      <th class="text-center">Hak Akses</th>
                      <th class="text-center">Action</th>
                      

                    </tr>
                  </thead>
   
                  <tbody>
                      <?php foreach($siswa as $isi):?>
                        <tr>
                    <td class="text-center"><?= $i; ?></td>
                    <td class="text-center"><img src="gambar/<?=$isi["nisn"];?>.jpg" alt="" width="40%" ></td>
                    
                    <td class="text-center"><?= $isi["nisn"]; ?></td>
                    <td class="text-center"><?= $isi["nama"]; ?></td>
                    <td class="text-center"><?= $isi["kelas"]; ?></td>
                    <td class="text-center"><?= $isi["password"]; ?></td>
                    <td class="text-center"><?= $isi["point"]; ?></td>
                    <td class="text-center"><?= $isi["hak_akses"];  ?></td>
                    <td class="text-center th-cs">
                      <a href="ubah.php?id=<?= $isi["id"];?>" class="btn btn-primary mt-2"><i class="fas fa-edit"></i>&nbsp;Ubah</a> 
                    
                     <a href="import/hapus.php?id=<?=$isi["id"];?>" class="btn btn-danger mt-2" onclick="return deleteconfig()"><i class="fas fa-trash-alt" ></i>&nbsp; Hapus</a>




             
                    </td>

                        </tr>


                      <?php 




                      $i++;
                      endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; AGUS PRABOWO</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- End of Page Wrapper -->
     <?php 
                 

include "import/modals.php";
    include "import/footer.php";
?>