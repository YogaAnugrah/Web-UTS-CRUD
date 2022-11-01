<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>2-TIER</title>
        <nav class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <b  class="navbar-brand nav-link active text-center " href="#">PEMROGRAMAN BASIS DATA</b>       
            </div>
         </nav>
    </head>

<?php 
require 'skrip/functions.php';
$transaksi = query("SELECT * FROM transaksi");
?>

<!DOCTYPE html>
<html>
<head>
	<title>transaksi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/admin.css">
	<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>
<body>
<div class="container">

<table class="table table-striped table-warning mt-4">
<form action="tambah.php" method="POST"  class="mt-4">
	<div class="btn-group" role="group" aria-label="Third group">
    	<button type="submit" name="tambah" class="btn btn-success jarak-atas">Tambah data</button>
  	</div>
</form>
  <thead align="center">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">KODE BARANG</th>
      <th scope="col">NAMA BARANG</th>
      <th scope="col">JUMLAH</th>
      <th scope="col">HARGA</th>
      <th scope="col">TOTAL BAYAR</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody align="center">
	<?php $i = 1; ?>
		<?php  foreach ($transaksi as $row ) : ?>
            <?php $toyar = ($row["harga"] * $row["jumlah"]) - $row["disc"]; ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["kode_barang"]; ?></td>
			<td><?= $row["nama_barang"]; ?></td>
			<td><?= $row["jumlah"]; ?></td>
			<td>Rp.<?= number_format($row["harga"]); ?></td>
			<td>Rp.<?= number_format($toyar); ?></td>
			<td>
        <a href="ubah.php?id_transaksi=<?= $row["id_transaksi"];?>" class="btn btn-warning">Edit</a>
        <a href="hapus.php?id_transaksi=<?= $row["id_transaksi"]; ?>"
        onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
<footer class="bg-dark text-center text-white">
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                            © 2022 Copyright:
                            <a class="text-white" href="https://instagram.com/yogaangrh?igshid=YmMyMTA2M2Y=">@yogaangrh</a>
                        </div>
                    </footer>
</html>
