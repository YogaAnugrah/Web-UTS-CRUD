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

if (isset($_POST["submit"] ) ){


if ( tambah($_POST) > 0) {
  echo "
    <script>
      alert('Tambah Data berhasil');
      document.location.href = 'index.php';
    </script>
    ";
  } else {
  echo "
    <script>
      alert('Tambah Data gagal');
      document.location.href = 'index.php';
    </script>
  ";
  }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
	  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <body>
<div class="container">
<div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Berikut Form Transaksi
            </div>
            <div class="card-body">
                <form method="post" action="">
                <div class = "form-group">
    <label for="kode_barang">Kode Barang</label>
    <input type="text" class="form-control" name="kode_barang" id="kode_barang" required>
  </div>
 <div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" id="nama_barang" required>
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" id="harga" required>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" id="jumlah" required>
  </div>
  <div class="form-group">
    <label for="disc">Discount</label>
    <select name="disc" class="form-control">
      <option value="0">0</option>
      <option value="10000">10%</option>
      <option value="22500">15%</option>
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary" >Tambah data</button>
  <br>
   <div class="btn-group" role="group" aria-label="Third group">
    <div class="card mb-4">
    </div>
  </div>
 </div>
</div>
</div>
</form>
</body>
<div class="card mt-4">
<footer class="bg-dark text-center text-white">
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                            © 2022 Copyright:
                            <a class="text-white" href="https://instagram.com/yogaangrh?igshid=YmMyMTA2M2Y=">@yogaangrh</a>
                        </div>
                    </footer>
</html>
