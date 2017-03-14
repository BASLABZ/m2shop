
<div class="about">
		<!-- container -->
		<div class="container">
		
			<div class="about-grids">
				
				<div class="col-md-6 about-left">
				<h3 align="center">Informasi Profil Member Login </h3>	
				 <?php
				if(isset($_SESSION['id_kustomer']))
				    
				{
				 $query = mysql_query("SELECT * FROM kustomer WHERE id_kustomer=$_SESSION[id_kustomer]");
				  $d = mysql_fetch_array($query);
				?>

				<form method="POST">
					<label>Nama Lengkap</label>
					<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $d['nama_lengkap']; ?>" >

					<label>Telepon</label>
					<input type="text" name="telpon" class="form-control" value="<?php echo $d['telpon']; ?>">

					<label>E-mail</label>
					<input type="text" name="email" class="form-control" value="<?php echo $d['email']; ?>">

					<label>Alamat</label>
					<textarea name="alamat" class="form-control"><?php echo $d['alamat']; ?></textarea>

					<label>Username</label>
					<input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>">

					<label>Password</label>
					<input type="text" name="password" class="form-control" value="<?php echo $d['password']; ?>">

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
				<!-- 	<button type="submit" name="registrasi" class="btn btn-primary">Ubah</button> -->
					
				</form>	
				<?php } ?>
				</div>

				<div class="col-md-6 about-middle">
				<br><br><br>
				<!-- 	<p>Silahkan Login atau Registrasi</p> -->
					<img src="admin/gambar/logo.jpg" class="img-thumbnail" width="275" height="200">
				</div>
			</div>
				<div class="clearfix"> </div>
				<hr>
			
		</div>
	</div>