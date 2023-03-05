<?php
$host = "localhost";
$user= "root";
$pass = "";
$db = "crud_gc";
$koneksi = mysqli_connect($host,$user,$pass,$db);
if (!$koneksi) {
	die("koneksi degan database gagal:".mysqli_connect_error());
}else {
	echo "berhasill";
}

?>