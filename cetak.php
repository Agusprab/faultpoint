<?php

require_once __DIR__ . '/vendor/autoload.php';
include "import/functions.php";
$siswa = query("SELECT * FROM data_pelanggaran order by id desc");
$mpdf = new \Mpdf\Mpdf();
$html ='
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<style type="text/css">
	td{
		font-size: 12px;
	}
	*{
	font-family: Poppins, sans-serif;
	}
</style>
</head>
<body>
<h1 style="text-align: center">Data Pelanggaran</h1>
<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>NO</th>
		<th>Gambar</th>
		<th>NISN</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Kesalahan</th>
		<th>Tanggal Masuk</th>	
		<th>Waktu</th>
	</tr>';
	$i =1;
foreach ($siswa as $isi ) {
	$html .='<tr>
				<td>'. $i++ .'</td>
				<td><img src="gambar/'.$isi["nisn"].'.jpg" alt="" width="50" ></td>
				<td style="text-align: center">'. $isi["nisn"].'</td>
				<td style="text-align: center">'.$isi["nama"].'</td>
				<td style="text-align: center">'.$isi["kelas"].'</td>
				<td style="text-align: left">'.$isi["kesalahan"].'</td>
				<td style="text-align: center">'.date('d F Y', strtotime($isi["tgl_masuk"])).'</td>	
				<td>'. $isi["waktu_masuk"].'</td>
	</tr>';	
}

$html.='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output(); ?>

