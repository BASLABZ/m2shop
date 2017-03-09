<?php 
$berita_judul=$_POST['berita_judul'];
$berita_des=$_POST['berita_des'];
$kat_id=$_POST['kat_id'];
if (!empty($_FILES) && $_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0) 
	{
	$fileName = $_FILES['gambar']['name'];
	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
	if ($move) {
		$query = mysql_query("INSERT into berita values('','$berita_judul',NOW(),'$berita_des',
				'$fileName','yes','$kat_id')");
	}
	}else{
		$query = mysql_query("INSERT into berita values('','$berita_judul',NOW(),'$berita_des',
				'','yes','$kat_id')");
	}
	if ($query) {
		echo "<script> alert(' Data Berita berhasil dimasukkan '); 
		location.href='index.php?pos=berita' </script>";exit;
      
	}else{
		echo "<script> alert(' Data Gagal Disimpan '); 
		location.href='index.php?pos=tambah_berita' </script>";exit;	
	}

 ?>

