	<header id="header">
		
		<div class="header-middle" style="background-color: #1ab394 !important;"><!--header-middle-->
			<div class="container bas-shadow">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php" style="color: white; font-size: 50px;"><img src="assets/images/logo.jpg" alt="" class="img-circle dim_about" style="width: 60px; " /> M2SHOP</a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" style="background-color: #1ab394 !important;">
								<?php
									if(isset($_SESSION['id_kustomer']))
									    
									{
									    $query = mysql_query("SELECT * FROM kustomer WHERE id_kustomer=$_SESSION[id_kustomer]");
									    $d = mysql_fetch_array($query);
									       
									?>		
								<li><a style="background-color: #1ab394 !important; color: white;" href="#" ><i class="fa fa-user"></i> Account </a></li>
								
								<li><a style="background-color: #1ab394 !important; color: white;" href="index.php?page=control-panel" ><i class="fa fa-list"></i> Control Panel</a></li>
								<li><a style="background-color: #1ab394 !important; color: white;" href="index.php?logout=1" ><i class="fa fa-sign-out"></i> Logout</a></li>
								<?php }else{ ?>
									<li><a style="background-color: #1ab394 !important; color: white;" href="index.php?page=login" ><i class="fa fa-lock"></i> Login</a></li>
								<?php } ?>
								<li><a style="background-color: #1ab394 !important; color: white;" href="index.php?page=cart" ><i class="fa fa-shopping-cart"></i> Cart</a></li>
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	
		<div class="header-bottom bas-shadow"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="index.php?page=daftar_produk">Produk</a></li>
								<li class="dropdown"><a href="#">Berita<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php 
											$querykategoriBerita = mysql_query("SELECT * FROM kategori");
											while ($kategoriBerita = mysql_fetch_array($querykategoriBerita)) {					
											
										 ?>
                                        <li><a href="index.php?page=detail_berita&id=<?php echo $kategoriBerita['kat_id']; ?>"><?php echo $kategoriBerita['kat_nm']; ?></a></li>
										<?php } ?>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Profil<i class="fa fa-angl-down"></i></a>
                                    <ul role="menu" class="sub-menu dim_about">
                                        <?php 
                                        $queryProfil = mysql_query("SELECT * FROM profil");
                                        while ($rowprofil = mysql_fetch_array($queryProfil)) {
                                         ?>
                                        <li><a href="index.php?page=detail_profil&id=<?php echo $rowprofil['profil_id']; ?>"><?php echo $rowprofil['profil_nm']; ?></a></li>
										<?php } ?>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Cara Pesan<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu dim_about">
                                        <li><a href="index.php?page=carapesan">Cara Pesan</a></li>
										<li><a href="index.php?page=kotatujuan">Kota Tujuan</a></li> 
                                    </ul>
                                </li> 

								<li><a href="index.php?page=kontak">Kontak</a></li>
									<?php
									if(isset($_SESSION['id_kustomer']))
									    
									{
									    $query = mysql_query("SELECT * FROM kustomer WHERE id_kustomer=$_SESSION[id_kustomer]");
									    $d = mysql_fetch_array($query);
									       
									?>		
								<li class="dropdown"><a href="index.php?page=control-panel"><span class="fa fa-list"></span> Control Panel<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu dim_about">
                                      <li><a href="index.php?page=control-panel"><span class="fa fa-list"></span> Menu</a></li>
									  <li><a href="index.php?logout=1"><span class="fa fa-sign-out"></span> Logout</a></li>
                                    </ul>
                                </li> 
								<?php }else{ ?>
								<li><a href="index.php?page=login">Login</a></li>
								<?php } ?>
								
								

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->	