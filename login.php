<?php 

session_start();

    require 'import/functions.php';


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


  // login admin
 if ($username == "admin" &&  $password == 123) {
    $_SESSION["admin"] = true;
    header("Location: index.php");
    exit;
}


//login user

 

    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE username='$username' and password='$password'");
$siswa = query("SELECT * FROM siswa WHERE username ='$username'");
$cek = mysqli_num_rows($result);
if(  $cek == 1 ) {
     
  $_SESSION["username"] = $username;

  $data = mysqli_fetch_assoc($result);

if ($data["hak_akses"] == "MPK" or $data["hak_akses"] == "OSIS") {
          $_SESSION["pengurus"] = true;
        header("Location: userSP/");  
  echo "string";die;
}

        $_SESSION["login"] = true;
         header("Location: users/");

        exit;
         
}    
 $error = true;
 echo "
                <script>
               alert('Username atau Password Salah');
                </script>
            ";

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Fault Point</title>
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
  <style type="text/css">
    .backg{
      width: 100%;
height: 100vh;
background: #9152f8;
  background: -webkit-linear-gradient(top, #00a8cc, #142850);
  background: -o-linear-gradient(top, #00a8cc, #142850);
  background: -moz-linear-gradient(top, #00a8cc, #142850);
  background: linear-gradient(top, #00a8cc, #142850);
    }


    /*screen android*/

  </style>
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style-landing.css">
</head>
<body id="page-top">




<div class="backg" style="">
      <div class="" style="position: absolute;width: 400px;background: white;padding: 30px;left: 50%;top: 50%;transform: translate(-50%,-50%);border-radius: 10px" >
        <form method="POST" action="">
          <h1 class="text-center" style="font-size: 120%;">Silahkan Login</h1>
          <div class="text-center">
           <a href="LandingPage.php"> <img src="gambar/lg12.png" style="margin: auto;width: 50%"></a>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="username" name="username" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" name="password" required="">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Masuk</button>
      </form>

    </div>
</div>

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

</script>

</body>
</html>