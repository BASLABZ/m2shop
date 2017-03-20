
	<section id="form" style="margin-top:5px; "><!--form-->
		<div class="container">
			<div class="row ">
				<div class="col-md-12v  "><center><img src="assets/images/home/logo.png"><h3> <span class="fa fa-key"></span> Account Information<hr></h3></center></div>
				
				<div class="col-sm-12">
					<div class="category-tab shop-details-tab bas-shadow">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Akun</a></li>
								<li class=""><a href="#details" data-toggle="tab">Ganti Password</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-md-3"></div>
								<div class="col-sm-6">
									<div class="panel panel-success bas-shadow">
										<div class="panel-heading"><h6><span class="fa fa-user"></span> Ubah Profil</h6></div>
										<div class="panel-body">
											<div class="signup-form" style="padding-top: 10px;">
										<form method="POST">
											<input type="text" placeholder="Nama Lengkap" class="form-control" name="nama_lengkap"  value="<?php echo $_SESSION['nama_lengkap']; ?>" />
											<input type="text" placeholder="Username" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" />
											<input type="email" placeholder="Email" class="form-control"  name="email" value="<?php echo $_SESSION['email']; ?>" />
											<input type="number" placeholder="No.Telp" class="form-control"  name="telpon" value="<?php echo $_SESSION['telpon']; ?>" />
											<div style="margin-bottom: 10px;">
											<select id="oriprovince" class="select2" name="propinsi"><option>Propinsi</option></select><br>	
											</div>
											
								    	 	<div style="margin-bottom: 10px;">
								    	 	<select id="oricity" class="select2" name="kabupaten"><option>Kota</option></select><br>	
								    	 	</div>
								    	 	<textarea class="form-control" placeholder="Alamat" name="alamat"><?php echo $_SESSION['alamat']; ?></textarea> 
								    	 	
											<button type="submit" class="btn btn-default bas-shadow" style="margin-bottom: 10px;">Ubah</button>
										</form>
									</div><!--/sign up form-->
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="details">
								<div class="col-md-12">
									<div class="row">
										<div class="contact-form">
	    								<div class="status alert alert-success" style="display: none"></div>
	    									<div class="col-md-3"></div>
				    	 					<div class="col-md-6 ">
				    	 						<div class="panel panel-success bas-shadow">
				    	 							<div class="panel-heading"><h5><span class="fa fa-key"></span> Ganti Password</h5></div>
				    	 							<div class="panel-body">
				    	 								<label>Email</label>
						    	 						<input type="email" value="<?php echo $_SESSION['email']; ?>" disabled>
						    	 						<label>Username</label>
						    	 						<input type="text" value="<?php echo $_SESSION['username']; ?>" disabled>
						    	 						<label>Password Lama</label>
						    	 						<input type="password" placeholder="Password" class="form-control"  id="password1" maxlength="8" minlength="6"  name="password" />
														<input type="password" id="password2" required  class="form-control" placeholder="Re-Type Password" maxlength="8" minlength="6" onkeyup="checkPass(); return false;">
														<span id="confirmMessage" class="confirmMessage"></span><br>
														<button type="submit"  class="btn btn-primary bas-shadow" style="margin-bottom: 10px;">Ubah</button>
				    	 							</div>
				    	 						</div>

				    	 					</div>
	    								</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/form-->