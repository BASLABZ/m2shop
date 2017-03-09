<?php 
$profil_nm=$_POST['profil_nm'];
$profil_des=$_POST['profil_des'];
if (!empty($_FILES) && $_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0) 
{
	$fileName = $_FILES['gambar']['name'];
	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
	if ($move) {
		$query = mysql_query("INSERT into profil values('','$profil_nm','$profil_des','$fileName','yes')");
	}else{
		$query = mysql_query("INSERT into profil values('','$profil_nm','$profil_des','','yes')");
	}
	if ($query) {
		echo "<script> alert(' Data Profil berhasil dimasukkan '); 
		location.href='index.php?pos=profil' </script>";exit;
      
	}else{
		echo "<script> alert(' Data Gagal Disimpan '); 
		location.href='index.php?pos=tambah_profil' </script>";exit;	
	}
}
 ?>