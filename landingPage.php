<?php 
  session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
<link rel="icon" type="icon" href="gambar/icon.png">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- css custom -->
  <link rel="stylesheet" href="css/css-custom.css">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style type="text/css">

*{
	font-family: 'Poppins', sans-serif;
}
.text-open{
	font-size: 40px;
	font-weight:initial;
	letter-spacing: 5px;
	text-transform: uppercase;
font-family: 'Sigmar One', cursive;
}
.text-judul{
		font-size: 30px;
	font-weight:initial;
	letter-spacing: 5px;
		text-transform: uppercase;
}
.ct-2{
	height: 80vh;
}
.gambar1{
  width: 100%;
}

/*tampilan untuk android*/
@media (max-width: 993px) { 
*{
  padding: 0;

}
.ct-2{
  height: 750px;
}
.text-open, .txt-p{
  text-align: center;
}
.tombol-tengah{
  margin: auto;
  text-align: center;
 }
 .gambar1{
width: 60%;
}


}


}

</style>
<link rel="stylesheet" type="text/css" href="css/style-landing.css">
</head>
<body id="page-top">
	<section>
			<nav class="navbar navbar-expand-lg navbar-light fixed-top ">
				<div class="container">
  				<a class="navbar-brand text-white" href="#">FaultPoint</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon bg-black"></span>
				  </button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    	<ul class="navbar-nav ml-auto">
      	<li class="nav-item active">
	        <a class="nav-link text-white" href="#">Home<span class="sr-only">(current)</span></a>
      	</li>
      	<li class="nav-item">
        <a class="nav-link text-white" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Pricing</a>
      </li>
   
    </ul>
  </div>
</nav>
</div>
</section>
<section>
<div class="container-fluid" style="height: 750px;padding-top: 67px;background: #617be3;">
	<div class="container" >
	<div class="row mt-5 justify-content-center tombol-tengah">
			<div class="col-lg-5">
				<p class="text-white text-open mt-5 ">welcome to this website</p>
				<p class="text-white txt-p">Untuk melihat Point anda Silahkan Tekan Button</p>
				<a href="login.php" class="btn btn-dark tombol-tengah mb-5">Masuk Ke Halaman User</a>
			</div>
			<div class="col-lg-6">	<img src="gambar/gambar.svg"  class="gambar1"></div>
	</div>	
	</div>
</div>
<div class="container ct-2" style=";" >
		<div class="row justify-content-center">
			<div class="col-3 mt-5"><p class="text-judul">fault point?</p></div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6">
				<img src="gambar/faq.svg" width="100%">
			</div>
			<div class="col-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>

</div>
</section>
<div class="container-fluid">
  <p class="text-center">&COPY; COPYRIGHT BY AGUS PRABOWO</p>
</div>


   <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins --> 
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script type="text/javascript">
  	$(window).on("scroll", function(){
  		if ($(window).scrollTop()) {
  			$('nav').addClass('navbar-back');
  	
  					$('nav').addClass('navbar-light');
  		}else{
			$('nav').removeClass('navbar-back');
					$('nav').removeClass('navbar-light');
				$('a').addClass('text-white');
  		}

  	}


  
  	)

  </script>

</body>
</html>