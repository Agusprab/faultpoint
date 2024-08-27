<?php 
date_default_timezone_set("Asia/Jakarta");
     $conn = mysqli_connect("localhost","root","","FaultPoint");



function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){

        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $conn;
    $nama = $data["nama"];
    $nisn = $data["nisn"];
    $kelas = $data["kelas"];
    $password = $data["password"];
    $point = 100;
    $hakakses =$data["hak_akses"];
    $query = "INSERT INTO siswa VALUES (NULL,'$nisn','$nama','$kelas','$nisn','$password','$point',' ','$hakakses')";
        mysqli_query($conn, $query);
          return mysqli_affected_rows($conn); 

}

function hapus($id){
global $conn;
mysqli_query($conn,"DELETE FROM siswa WHERE id = $id");

return mysqli_affected_rows($conn);
}



function ubah($data){
    global $conn;
    $id = $data["id"];
   $nisn = $data["nisn"];
   $nama = $data["nama"];
   $kelas = $data["kelas"];
   $password = $data["password"];
   $point = $data["point"];
  $hakakses = $data["hak_akses"];      

    $query = "UPDATE siswa SET
                point = '$point',
                nisn = '$nisn',
                nama ='$nama',
                kelas = '$kelas',
                password = '$password',
                hak_akses = '$hakakses'
            
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn); 

    
}

function cari($keyword){
    $query = "SELECT * FROM siswa WHERE 
    nama like '$keyword%' OR
    nisn like '$keyword%' ";

return query($query);
}



function lapor($data){
    global $conn;
$pelapor = $data["pelapor"];
$nisn = $data["nisn"];
$nama = $data["nama"];
$point = $data["pelanggaran"];
$date = date("Y-m-d");
$time = date("H:i:s");
$kelas = $data["kelas"];

//mengambil data di fbsql_database(link_identifier)ase
$sql2 = mysqli_query($conn, "SELECT * FROM pelanggaran WHERE point_pelanggaran = $point");
$getdata = mysqli_fetch_array($sql2);
$kesalahan = $getdata["list_pelanggaran"];

    $query = "INSERT INTO data_pelanggaran VALUES (NULL,'$nisn','$nama','$pelapor','$kesalahan','$date','$time','$point','$kelas')";
        mysqli_query($conn, $query);
          return mysqli_affected_rows($conn); 

}




function hapusP($id){
global $conn;
mysqli_query($conn,"DELETE FROM data_pelanggaran WHERE id = $id");

return mysqli_affected_rows($conn);
}



function pointK($data){
global $conn;
  $pointKesalahan = $data["pelanggaran"];
  $pointSiswa = $data["point"];
$nisn = $data["nisn"];
  $hasil = $pointSiswa - $pointKesalahan;

   $query = "UPDATE siswa SET
                point = '$hasil' WHERE nisn = $nisn";
mysqli_query($conn, $query);
    return mysqli_affected_rows($conn); 
}

function resetpoint($point){
global $conn;

$sql = "UPDATE siswa SET point = $point";
mysqli_query($conn,$sql);
return mysqli_affected_rows($conn);
}

function hapusData(){
global $conn;
$sql = "DELETE FROM data_pelanggaran";
mysqli_query($conn,$sql);
return mysqli_affected_rows($conn);
}

?>
