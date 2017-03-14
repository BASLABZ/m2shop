<?php 
if (isset($_POST['login'])) 
    
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $no = 0;
  $sql = "SELECT * from kustomer where username = '$username' and password = '$password' and username !='admin' and aktif = 'Y'";
  $result = mysql_query($sql);
  while ($log=mysql_fetch_array($result))
    {
      $id_user = $log['id_kustomer'];
      $username = $log['username'];
      $password = $log['password'];
      $no++;
    }
    if ($no>0) 
    {
        $_SESSION['id_kustomer'] = $id_user;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "<script> alert('Login Sukses'); location.href='index.php'</script>";exit;
    }
    else
    {
        echo "<script> alert('Login gagal'); location.href='index.php?p=login'</script>";exit;

    }
}

?>


<?php 
	if (isset($_POST['registrasi'])) 
	{
		$sql = mysql_query("INSERT into kustomer (username,password,nama_lengkap,alamat,
			email,telpon,id_kota,aktif) values('$_POST[username]','$_POST[password]','$_POST[nama_lengkap]',
			'$_POST[alamat]','$_POST[email]','$_POST[telpon]','$_POST[id_kota]','Y')");
	
	if ($sql) 
	{
		echo "<script> alert(' Data berhasil dimasukkan Dan Silahkan Login Sebagai Member'); 
		location.href='index.php?p=login' </script>";exit;
	}
	else{
		echo "data gagal disimpan";
	}
}/*else{
		echo "Data Gagal Disimpan";
	}*/
 ?>
<div class="about">
		<!-- container -->
		<div class="container">
		
			<div class="about-grids">
				
				<div class="col-md-4 about-left">
				<h3 align="center">Silahkan Login Disini</h3>	
				<form method="POST">
				
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Isi Username Anda">
				
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Isi Paswword Anda">
				
					<br>
					<button type="submit" name="login" class="btn btn-primary">Login</button>
					<button type="reset" class="btn btn-default">Batal</button>				
				
				</form>		
				</div>

				<div class="col-md-4 about-middle">
				<br><br><br>
					<p>Silahkan Login atau Registrasi</p>
					<img src="admin/gambar/logo.jpg" class="img-thumbnail">
				</div>

				<div class="col-md-4 about-right">
				<h3 align="center">Daftarkan Diri Anda Menjadi Menmber Mua-mua Shop</h3>
				<form method="POST">
					<label>Nama Lengkap</label>
					<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">

					<label>Telepon</label>
					<input type="text" name="telpon" class="form-control" placeholder="No.Telpon">

					<label>E-mail</label>
					<input type="text" name="email" class="form-control" placeholder="Email">

					<label>Alamat</label>
					<textarea name="alamat" class="form-control"></textarea>

					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username">

					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">

					<label>Kota</label>
					<select name="id_kota" class="form-control" placeholder="Kota">
						<option>Pilih Kota</option>
						<?php 
							
								$result = mysql_query("SELECT * FROM kota order by nama_kota asc");
								while ($d = mysql_fetch_array($result)) {					
								
						?>
						<option value="<?php echo $d[0]; ?>"> <?php  echo $d[1];?></option>
						<?php } ?>
					</select>

					<br>
					<button type="submit" name="registrasi" class="btn btn-primary">Daftar</button>
					<button type="reset" class="btn btn-default">Batal</button>

				</form>
				</div>

			</div>
				<div class="clearfix"> </div>
				<hr>
			
		</div>
	</div>