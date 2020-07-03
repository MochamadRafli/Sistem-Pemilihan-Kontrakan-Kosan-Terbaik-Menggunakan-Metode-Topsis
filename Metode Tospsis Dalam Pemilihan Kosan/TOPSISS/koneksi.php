<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "topsiss";

//pdo ini bukan asli bawaan
$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} else {
  //echo "Sudah Konek";
}
 ?>
