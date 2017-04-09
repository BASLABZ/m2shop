<?php 
		include 'config/config.php';
		$ency = $_GET['id'];
		$email = $_GET['email'];
		$queryaktivasi = mysql_query("UPDATE kustomer set aktif='Y' where email='".$email."'");
		if ($queryaktivasi) {
			 echo "<script> alert('Akun Anda Telah Aktif Silahkan Login Member'); location.href='../index.php' </script>";exit;
		}
 ?>
