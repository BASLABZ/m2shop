<?php 
	$berita_id=$_POST['berita_id'];
	$berita_judul=$_POST['berita_judul'];
	$berita_des=$_POST['berita_des'];
	$kat_id=$_POST['kat_id'];

	if (!empty($_FILES) && $_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0) 
	{
	$fileName = $_FILES['gambar']['name'];
	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
	if ($move) {
		$query = mysql_query("UPDATE berita SET berita_judul='$berita_judul',berita_des='$berita_des',
				gambar='$fileName',kat_id='$kat_id' WHERE berita_id='$berita_id'");
	}
	}else{
		$query = mysql_query("UPDATE berita SET berita_judul='$berita_judul',berita_des='$berita_des',
				gambar='',kat_id='$kat_id' WHERE berita_id='$berita_id'");
	}
	if ($query) {
		echo "<script> alert(' Data Berita berhasil diubah '); 
		location.href='index.php?pos=berita' </script>";exit;
      
	}else{
		echo "<script> alert(' Data Gagal Disimpan '); 
		location.href='index.php?pos=edit_berita' </script>";exit;	
	}

	
 ?>