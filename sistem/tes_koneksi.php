<?php 
require("koneksi.php");

$hub = open_connection();
if ($hub) {
    echo ("Conection SUCCES");
} else {
    echo ("Conection FAILED");
}

mysqli_close($hub);
?>