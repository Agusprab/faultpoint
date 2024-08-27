    <?php    
    session_start(); 
if(!isset ($_SESSION["admin"])){
    header("Location: userSP/");
    exit;
}


    include "import/header.php";
    require 'import/functions.php';
$id = $_GET["id"];
$pelajar = query("SELECT * FROM siswa WHERE id= $id")[0];

if(isset($_POST["ubahpoint"])){

        if(ubah($_POST) > 0){
            echo "
                <script>
                alert('Point berhasil DI Ubah!');
                document.location.href = 'datasiswa.php';
                </script>
            
            ";
            

        } else{
            echo "
            <script> 
                alert('Point GAGAL di Ubah!');
                document.location.href ='datasiswa.php';
            </script>
        
        ";

        }
}
 ?>




 <div class="container" style="width: 40%">

  <h1 class="text-center mt-5">Ubah Data</h1>
   <form method="POST" action="">
     <input type="hidden" name="id" value="<?= $pelajar["id"];?>">
   <div class="form-group">
    <label for="" class="">NISN :</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp"
    value="<?= $pelajar["nisn"];?>" 
    name="nisn" 
    ></div>
      <div class="form-group">
    <label for="" class="">Nama :</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp"
    value="<?= $pelajar["nama"];?>" 
    name="nama"
    ></div>
      <div class="form-group">
    <label for="" class="">Kelas :</label>
 <!--    <input type="text" class="form-control" id="" aria-describedby="emailHelp"
    value="<?= $pelajar["kelas"];?>" 
    name="kelas"
    > -->
        <select class="form-control" name="kelas" >
               <option value="<?= $pelajar["kelas"];?>"> - <?= $pelajar["kelas"];?> -</option>
                  <option value="XI - AP ">XI - AP </option>
                  <option value="XI - AK 1">XI - AK 1</option>
                  <option value="XI - AK 2">XI - AK 2</option>
                  <option value="XI - PM 1">XI - PM 1</option>
                  <option value="XI - PM 2">XI - PM 2</option>
                  <option value="XI - RPL 1">XI - RPL 1</option> 
                  <option value="XI - RPL 2">XI - RPL 2</option>                        
              </select>

</div>
<div class="form-group">
            <label for="message-text" class="col-form-label">Hak Akses :</label>
             <select class="form-control" name="hak_akses">
                  <option value="<?= $pelajar["hak_akses"];?>"> - <?= $pelajar["hak_akses"];?> -</option>
                  <option value="Siswa">Siswa</option>
                  <option value="OSIS">OSIS</option>
                  <option value="MPK">MPK</option>                   
              </select>
            
          </div>
      <div class="form-group">
    <label for="" class="">Password :</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp"
    value="<?= $pelajar["password"];?>" 
    name="password"
    ></div>
  <div class="form-group">
    <label for="" class="">Point Total :</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp"
    value="<?= $pelajar["point"];?>" 
    name="point"
    ></div>


  <button type="submit" name="ubahpoint"class="btn btn-primary " style="width: 100%;">Submit</button>
  <a href="datasiswa.php" class="btn btn-danger mt-2" style="width: 100%;">Cancel</a>
</form>
 </div>

 <?php    include "import/footer.php";  ?>