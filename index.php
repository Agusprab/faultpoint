<?php 
date_default_timezone_set("Asia/Jakarta");
session_start();

if(!isset ($_SESSION["admin"])){
    header("Location: userSP/");
    exit;
}

require "import/functions.php";
include "import/header.php";
include "import/navbar.php";
   
$date = date("Y-m-d");

$jumlahsiswa = query("SELECT * FROM siswa");
$jumlahpelanggaran = query("SELECT * FROM data_pelanggaran WHERE tgl_masuk = '$date'");
$count = count($jumlahsiswa);
$count2 = count($jumlahpelanggaran);
$siswa = query("SELECT * FROM siswa order by point desc");
$siswa2 = query("SELECT * FROM siswa order by point asc");
 ?>
 <div class="container-fluid">
 	<div class="row">
        <!-- Jumlah Siswa Card  -->
    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card  border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Siswa</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count;?></div>
                    </div>
                    <div class="col-auto">
                      
                      <i class="fa fa-user fa-2x text-gray-300" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pelanggaran Hari ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count2  ?></div>
                    </div>
                    <div class="col-auto">
                      
                      <i class="fas fa-exclamation-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    
        
          </div>

          <div class="row">

              <div class="col-md-6">
                <div class="card shadow  ">
                  <div class="card-body">
                    <div class="text-center mt-3 mb-3"><h4 class="text-primary font-weight-bold"><i class="far fa-star"></i>&nbsp;SISWA TERATAS</h4></div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                        
                         <th>NISN</th>
                         <th>NAMA</th>
                         <th>KELAS</th>
                         <th>POINT</th>
                               
                        </thead> 
<?php 
$i = 1;
foreach ($siswa as $data ) :

 ?>
                         <tbody>
                          <input type="hidden" name="" value="<?=$i;?>">
                          <td><?= $data["nisn"]; ?></td>
                          <td><?= $data["nama"]; ?></td>
                          <td><?= $data["kelas"]; ?></td>
                          <td><?= $data["point"]; ?></td>
                         </tbody>
<?php 
$i++; 
if ($i == 6) {
  break;
}
endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card shadow">
                  <div class="card-body">
                   <div class="text-center mt-3 mb-3"><h4 class="text-primary font-weight-bold"><i class="fas fa-arrow-down"></i>&nbsp;SISWA TERBAWAH</h4></div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
             
                         <th>NISN</th>
                         <th >NAMA</th>
                         <th>KELAS</th>
                         <th>POINT</th>
                               
                        </thead>
<?php 
$j = 1;
foreach ($siswa2 as $data2 ) :

 ?>
                         <tbody>
                         <input type="hidden" name="" value="<?=$j;?>">
                          <td><?= $data2["nisn"]; ?></td>
                          <td><?= $data2["nama"]; ?></td>
                          <td><?= $data2["kelas"]; ?></td>
                          <td><?= $data2["point"]; ?></td>
                         </tbody>
<?php 
$j++; 
if ($j == 6) {
  break;
}
endforeach; ?>

                      </table>
                    </div>
                  </div>
                </div>
              </div>

          </div>


 </div>

 <?php 
 include "import/modals.php";
include "import/footer.php";
  ?>