<?php  

	$host="localhost";
	$user="root";
	$password="";
	$database="transaksi";
	$koneksi=mysqli_connect($host,$user,$password);

	$db=mysqli_select_db($koneksi,$database);

?>