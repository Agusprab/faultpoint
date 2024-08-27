<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../datasiswa.php';
		</script>
	";
} 

else if(hapusP($id) > 0) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../datapelanggaran.php';
		</script>
	";
} 
else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../datasiswa.php';
		</script>
	";
}





?>