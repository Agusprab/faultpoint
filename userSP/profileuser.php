<?php 

session_start();
if(!isset ($_SESSION["pengurus"])){
    header("Location: ../users");
    exit;
}

    require '../import/functions.php';
$nisn = $_SESSION["username"];
$pelajar = query("SELECT * FROM siswa WHERE nisn= $nisn")[0];
  $conn = mysqli_connect("localhost","root","","FaultPoint");

if (isset($_POST["ubahpassword"])) {
    $passwordnew = $_POST["newpassword"];
    $passwordV = $_POST["vpassword"];
    $passwordold = $pelajar["password"];
 
if ($passwordnew == $passwordold) {
      echo "
             <script> 
                alert('Password anda sama seperti terdahulu!');
              </script>
       
         ";

}
    else if ($passwordnew == $passwordV) {
            $query = "UPDATE siswa SET password = '$passwordnew' WHERE nisn = $nisn";
             mysqli_query($conn,$query);
               $pelajar["password"] = $passwordnew ;
                  echo "
            <script> 
                alert('Password berhasil di ubah!');
              </script>
       
        ";

            

    }


    else{
         echo "
            <script> 
                alert('Password tidak sama!');
              </script>
       
        ";
    }
}

     





if (isset($_POST["ubahdesc"])) {
    $deskripsi = $_POST["desc"];
         $query = "UPDATE siswa SET deskripsi = '$deskripsi' WHERE nisn = $nisn";
             mysqli_query($conn,$query);
             $pelajar["deskripsi"] = $deskripsi;
             echo "
            <script> 
                alert('Deskripsi berhasil di ubah!');
              </script>
       
        ";

}



include "../import/modals.php";

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
  <link rel="icon" type="icon" href="../gambar/icon.png">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Fault Point</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../users/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../users/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../users/assets/css/demo.css" rel="stylesheet" />

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../users/assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="index.php" class="simple-text">
                        Fault Point
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                         <li class="nav-item">
                        <a class="nav-link" href="kesalahan-saya.php">
                            <i class="fas fa-chart-area"></i>
                            <p>Kesalahan Saya</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./profileuser.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                  
                  <li>
                        <a class="nav-link" href="./laporkansiswa.php">
                            <i class="fas fa-exclamation-circle"></i>
                            <p>Laporkan Siswa</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none"> Dashboard</span>
                                </a>
                            </li>
                       
                    
                        </ul>
                        <ul class="navbar-nav ml-auto">
                          
                            <li class="nav-item">
                                <a href=""class="nav-link"  data-toggle="modal" data-target="#logoutModal1">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="d-lg-block">&nbsp;Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-image" style="height: ;position: static;z-index: 0;" >
                                    <img src="../gambar/bg-profile.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="" src="../gambar/<?=$pelajar["nisn"];?>.jpg" alt="..." style="z-index: 1;position: relative;border-radius: 5px;padding-top: -50px;" width="20%">
                                            <h4 class="title font-weight-bold"><?=$pelajar["nama"];?></h4>
                                        </a>
                                        <p class="description">
                                        <?=$pelajar["nisn"];?>
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        " <?=$pelajar["deskripsi"];?> "
                                       
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                                <form method="POST" action="">
                                    <div class="card">
                                        <div class="card-header text-center text-primary font-weight-bold" ><p style="font-family: Poppins;" class="font-weight-bold">UBAH PASSWORD</p></div>
                                        <div class="card-body">
                                            <ul style="list-style-type: none;">
                                                <li class="col-10 form-group justify-content-center">
                                                    <label class="font-weight-normal">Password lama :</label>
                                                    <input type="text" name="oldpass" class="form-control" disabled="" value="<?=$pelajar["password"];?>">
                                                </li>

                                                 <li class="col-10 form-group">
                                                    <label class="font-weight-normal">Password baru :</label>
                                                    <input type="text" class="form-control" name="newpassword"  required="">
                                                </li>

                                                 <li class="col-10 form-group">
                                                    <label class="font-weight-normal">Password lama :</label>
                                                    <input type="text" class="form-control" name="vpassword"  required="">
                                                </li>

                                                <li class="col-5" >
                                                    <button class="btn btn-success bg-success text-white" name="ubahpassword" type="submit">Ubah</button>
                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                </form>
                        </div>


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center text-primary"><p style="font-family: Poppins;" class="font-weight-bold">UBAH DESKRIPSI</p></div>
                                        
                                        <div class="card-body">
                                            <form method="POST" action="">
                                               <div class=" col-md-12 form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Tentang Diri sendiri</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="200" maxlength="50" name="desc"></textarea>

                                      <button class="btn btn-success bg-success text-white mt-4" name="ubahdesc">Kirim</button>
                                    </form>
                                  </div>
                                        </div>
                            </div>  
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../users/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../users/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../users/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../users/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../users/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../users/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../users/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../users/assets/js/demo.js"></script>

</html>
