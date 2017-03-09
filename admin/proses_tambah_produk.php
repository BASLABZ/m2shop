<?php

$katpro_id = $_POST['katpro_id'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$status = $_POST['status'];


if(!empty($_FILES) && $_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0){
	$fileName = $_FILES['gambar']['name'];
	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
	if($move){
		$query = mysql_query("INSERT into produk values('','$katpro_id','$nama_produk',NOW(),'$harga','$deskripsi',
			'$fileName','$stok ','$status','1')");

	}
	
	}else{
    	$query = mysql_query("INSERT into produk values('','$katpro_id','$nama_produk',NOW(),'$harga','$deskripsi',
			'','$stok ','$status','1')");
	}
	if($query) {
		echo "<script> alert('Data Berhasil dimasukkan'); location.href='index.php?pos=produk' </script>";exit;}
	else {
		echo "<script> alert('Data Gagal Masuk!!'); location.href='index.php?pos=tambah_produk' </script>";exit;}
?>

