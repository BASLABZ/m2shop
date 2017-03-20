<!-- registrasi member -->
<?php 
		if (isset($_POST['registrasi'])) {
			$queryResgitrasi = mysql_query("INSERT INTO kustomer (username,password,nama_lengkap,alamat,email,telpon,propinsi,kabupaten) 
				VALUES ('".$_POST['username']."',md5('".$_POST['password']."'),'".$_POST['nama_lengkap']."','".$_POST['alamat']."','".$_POST['email']."','".$_POST['telpon']."','".$_POST['propinsi']."','".$_POST['kabupaten']."')");
			if ($queryResgitrasi) {
				 echo "<script>alert('Anda Berhasil Registrasi Dan SIlahkan Login'); 
                location.href='index.php?page=login'</script>";exit;		
			}
		}
 ?>
 <?php 
	if (isset($_POST['login'])) 
	{
	  $username = $_POST['username'];
	  $password = md5($_POST['password']);
	  $no = 0;
	  $sql = "SELECT * from kustomer where username = '$username' and password = '$password' and username !='admin'  ";
	  

	  $result = mysql_query($sql);
	  while ($log=mysql_fetch_array($result))
	    {
	      $id_user = $log['id_kustomer'];
	      $username = $log['username'];
	      $password = $log['password'];
	      $nama_lengkap = $log['nama_lengkap'];
	      $email = $log['email'];
	      $notelp = $log['telpon'];
	      $alamat = $log['alamat'];

	      $no++;
	    }
	    if ($no>0) 
	    {
	        $_SESSION['id_kustomer'] = $id_user;
	        $_SESSION['username'] = $username;
	        $_SESSION['password'] = $password;
	        $_SESSION['nama_lengkap'] = $nama_lengkap;
	        $_SESSION['email'] = $email;
	        $_SESSION['alamat'] = $alamat;
	        $_SESSION['telpon'] = $telpon;
	        echo "<script> alert('Login Sukses'); location.href='index.php'</script>";exit;
	    }
	    else
	    {
	        echo "<script> alert('Login gagal'); location.href='index.php?page=login'</script>";exit;

	    }
	}

	?>
	<section id="form" style="margin-top:5px; "><!--form-->
		<div class="container">
			<div class="row ">
				<div class="col-md-12v  "><center><img src="assets/images/home/logo.png"><h3>Login / Registrasi Kustomer<hr></h3></center></div>
				<div class="col-sm-4 col-sm-offset-1 bas-shadow">
					<div class="login-form  "><!--login form-->
						<h2>Login to your account</h2>
						<form method="POST">
							<input type="text" placeholder="Username" name="username" />
							<input type="password" placeholder="Password" name="password">
							<button type="submit" name="login" class="btn btn-default bas-shadow" style="margin-bottom: 10px;">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1 ">
					<h2 class="or bas-shadow">OR</h2>
				</div>
				<div class="col-sm-4 bas-shadow">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form method="POST">
							<input type="text" placeholder="Nama Lengkap" class="form-control" name="nama_lengkap" />
							<input type="text" placeholder="Username" class="form-control" name="username" />
							<input type="email" placeholder="Email" class="form-control"  name="email" />
							<input type="password" placeholder="Password" class="form-control"  id="password1" maxlength="8" minlength="6"  name="password" />
							<input type="password" id="password2" required  class="form-control" placeholder="Re-Type Password" maxlength="8" minlength="6" onkeyup="checkPass(); return false;">
							<span id="confirmMessage" class="confirmMessage"></span>
							<input type="number" placeholder="No.Telp" class="form-control"  name="telpon" />
							<div style="margin-bottom: 10px;">
							<select id="oriprovince" class="select2" name="propinsi"><option>Propinsi</option></select><br>	
							</div>
							
				    	 	<div style="margin-bottom: 10px;">
				    	 	<select id="oricity" class="select2" name="kabupaten"><option>Kota</option></select><br>	
				    	 	</div>
				    	 	<textarea class="form-control" placeholder="Alamat" name="alamat"></textarea> 
				    	 	
							<button type="submit" name="registrasi" class="btn btn-default bas-shadow" style="margin-bottom: 10px;">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->