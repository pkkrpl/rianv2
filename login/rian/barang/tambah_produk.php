
<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>crud gila coding</title>
	<style type="text/css">
		*{
			font-family: "Trebuchet MS";
		}
		h1 {
			text-transform: uppercase;
			color: salmon;
		}
		.base{
			width: 400px;
			padding:30px;
			margin-left: auto;
			margin-right: auto;
			background-color: #ededed;

}
         label{
	margin-top: 10ox;
	float: left;
	text-align: left;
	width: 100%;
}
input{

padding: 60px;
width: 100%;
box-sizing: border-box;
background-color: #f8f8f8;
border:2px solid #ccc;
outline-color: salmon: 
}
button{
	background-color: salmon;
	color: #fff;
	padding: 10px;
	font-size:20px; 
}



	</style>
</head>
<body>
<center><h1>tambah produk</h1></center>
<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
<section class="base">
<div>
	<label>nama produk</label>
	<input type="text" name="nama_produk" outofocus="" required="" />
</div>
<div>
	<label>deskripsi</label>
	<input type="text" name="deskripsi" />
</div>
<div>
	<label>harga jual</label>
	<input type="text" name="harga_jual" required="" />
</div>
<div>
	<label>harga beli</label>
	<input text" name="harga_beli" required="" />
</div>
<div>
	<label>gambar produk</label>
	<input type="file" name="gambar_produk" required="" />
</div>
<div>
	<button type="submit">simpan produk</button>
</div>
	
</section>

</body>
</html>