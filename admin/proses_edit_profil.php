<?php 
	$profil_id=$_POST['profil_id'];
	$profil_nm=$_POST['profil_nm'];
	$profil_des=$_POST['profil_des'];
	
	if (!empty($_FILES) && $_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0) 
{
	$fileName = $_FILES['gambar']['name'];
	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
	if ($move) {
		$query = mysql_query("UPDATE profil SET profil_nm='$profil_nm',profil_des='$profil_des',
				gambar='$fileName' WHERE profil_id='$profil_id'");
		
	}else{
		$query = mysql_query("UPDATE profil SET profil_nm='$profil_nm',profil_des='$profil_des',
				gambar=' ' WHERE profil_id='$profil_id'");
	}
	if ($query) {
		echo "<script> alert(' Data Profil berhasil diubah '); 
		location.href='index.php?pos=profil' </script>";exit;
      
	}else{
		echo "<script> alert(' Data Gagal Disimpan '); 
		location.href='index.php?pos=edit_profil' </script>";exit;	
	}
}
 