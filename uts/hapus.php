<?php 
require 'skrip/functions.php';

$id_transaksi = $_GET["id_transaksi"];

if ( hapus($id_transaksi) > 0 ){
	echo "
		<script>
			alert('Data BERHASIL dihapus');
			document.location.href = 'index.php';
		</script>
		";
	} else {
	echo "
		<script>
			alert('Data GAGAL dihapus');
			document.location.href = 'index.php';
		</script>
	";
	}



?>