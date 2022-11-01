<?php 
	//koneksi
	require'koneksi.php';

function query ($query) {
 	global $koneksi;
	$result = mysqli_query($koneksi, $query);
 	$rows = [];
 	while ( $row = mysqli_fetch_assoc($result) ) {
 		$rows[] = $row;
 	}
 	return $rows;
}

function tambah($data){
	global $koneksi;

	$kodebarang = htmlspecialchars($data["kode_barang"]);
	$namabarang = htmlspecialchars($data["nama_barang"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$disc = htmlspecialchars($data["disc"]);

	$query = "INSERT INTO transaksi
				VALUES  
				('','$kodebarang','$namabarang','$harga','$jumlah','$disc')";
	mysqli_query($koneksi ,$query);

	return mysqli_affected_rows($koneksi);
}


function ubah($data) {
	global $koneksi;

	$id_transaksi = $data["id_transaksi"];
	$kodebarang = htmlspecialchars($data["kode_barang"]);
	$namabarang = htmlspecialchars($data["nama_barang"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$disc = htmlspecialchars($data["disc"]);

	$query = "UPDATE transaksi SET 
			kode_barang = '$kodebarang',
			nama_barang = '$namabarang',
			harga = '$harga',
			jumlah = '$jumlah',
			disc = '$disc'
		WHERE id_transaksi = $id_transaksi
			";

	mysqli_query($koneksi ,$query);

	return mysqli_affected_rows($koneksi);
}


function hapus($id_transaksi){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi");
	return mysqli_affected_rows($koneksi);
}

?>