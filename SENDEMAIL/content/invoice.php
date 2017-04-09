<?php
// load query database
$email = $_GET['email'];
$querymember  = mysql_query("SELECT * from  kustomer where email='".$email."'");
$row  = mysql_fetch_array($querymember);
$emails  = $row['email'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
	<center><h3>M2SHOP , Yogyakarta
			</h3>
	</center>
	<p>Terima Kasih Telah Bergabung Dengan Kami </p>
	<p>untuk <b>Aktifasi</b> Silahkan Klik Link Berikut <a href="http://localhost/LBPUGM/member/SENDEMAIL/konfirmasi.php?email=<?php echo $emails; ?>">Aktifasi Akun</a> </p>
</body>
</html>