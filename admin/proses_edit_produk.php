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
		$query = mysql_query("UPDATE produk SET katpro_id='$katpro_id',nama_produk='$nama_produk',harga='$harga',
				deskripsi='$deskripsi','$fileName',stok='$stok',status='$status' WHERE id_produk='$id_produk'");

	}
	
	}else{
    	$query = mysql_query("UPDATE produk SET katpro_id='$katpro_id',nama_produk='$nama_produk',harga='$harga',
				deskripsi='$deskripsi','',stok='$stok',status='$status' WHERE id_produk='$id_produk'");
	}
	if($query) {
		echo "<script> alert('Data Berhasil diubah'); location.href='index.php?pos=produk' </script>";exit;}
	else {
		echo "<script> alert('Data Gagal Masuk!!'); location.href='index.php?pos=edit_produk' </script>";exit;}
?>
