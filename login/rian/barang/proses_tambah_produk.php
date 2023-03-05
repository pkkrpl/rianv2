<?php
include('koneksi.php');
   
   $nama_produk = $_POST["nama_produk"];
   $deskripsi = $_POST["deskripsi"];
   $harga_jual = $_POST[" 	harga_jual "];
   $harga_beli = $_POST["harga_beli "];
   $gambar = $_POST["gambar"]['name'];

   if($gambar != ""){
$ekstensi_diperbolehkan  = array('png','jpg','jpeg');
$x = explode(',', $gambar);
$ekstensi = strtolower(end($x));
$file_tmp = $_FILES['gambar']['tmp_nama']
$angka_acak = rand(1, 999);
$nama_gambar_baru = $angka_acak.'-'.$gambar;

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

	move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar-baru);
	$query = "INSERT INTO produk (nama_produk,deskripsi,harga_beli,harga_jual,gambar) values('$nama_produk','$deskripsi,'harga_jual','harga_beli','gambar)";
	$result = mysqli_query($koneksi, $query);

	if(!$result){
		die("query error : ".mysqli_errno($koneksi)."-".mysql_error($koneksi));

	}else{
		echo "<script>alert('data berhasil di tambahkan1');window.location='barang.php';</script>";
	}

}else{

	echo =<script>alert('Ekstensi gambar hanya bisa jpg png dan jpeg');window.location='tambah_produk.php';</script>;
}
   }else{
   	echo =<script>alert('silahkan upload gambar dulu');window.location='tambah_produk.php';</script>;

   }
   	$query = "INSERT INTO produk (nama_produk,deskripsi,harga_beli,harga_jual,gambar) values('$nama_produk','$deskripsi,'harga_jual','harga_beli')";
	$result = mysqli_query($koneksi, $query);

	if(!$result){
		die("query error : ".mysqli_errno($koneksi)."-".mysql_error($koneksi));

	}else{
		echo "<script>alert('data berhasil di tambahkan1');window.location='barang.php';</script>";
	}
}

   ?>