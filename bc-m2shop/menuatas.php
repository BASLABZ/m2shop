<div class="header">
		<div class="container">
			<div class="header-top">
				<div class="header-logo">
					<a href="index.html"><img src="admin/gambar/logo.jpg"/></a>
				</div>
				<div class="header-right">
					<ul>
						<li class="phone">+6285743400656</li>
						<li class="bbm">274DBA80</li>
						<li class="mail">muamuashop@yahoo.com</li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=""></span>
				<ul class="nav">
					<li class="dropdown1"><a href="index.php">HOME</a></li>
					<li class="dropdown1"><a href="#">BERITA</a>
						<ul class="dropdown2">
							<?php 
								$result = mysql_query("SELECT * FROM kategori");
								while ($d = mysql_fetch_array($result)) {					
								
							 ?>
							<li><a href="index.php?p=berita_kategori&kat_id=<?php echo $d[0]; ?>">
							<?php echo $d['kat_nm']; ?></a></li>
							<?php } ?>
						</ul>
					</li>     
					<li class="dropdown1"><a href="index.php?p=profil">PROFIL</a></li>              
					<li class="dropdown1"><a href="index.php?p=produk">PRODUK</a></li>  
					<li class="dropdown1"><a href="#">CARA ORDER</a>
						<ul class="dropdown2">
							<li><a href="index.php?p=cara_pesan">Cara Pesan</a></li>
							<li><a href="index.php?p=kota_tujuan">Kota Tujuan</a></li>
						</ul>
					</li>
					<?php if (isset($_SESSION['id_kustomer']) && isset($_SESSION['username'])) {?>
					<li><a href="index.php?p=cart">CART</a></li>
					
					<?php } ?>  
					<?php
									if(isset($_SESSION['id_kustomer']))
									    
									{
									            $query = mysql_query("SELECT * FROM kustomer WHERE id_kustomer=$_SESSION[id_kustomer]");
									        $d = mysql_fetch_array($query);
									       // $gambar = $d['gambar'];
									?>					           
					<li><a href="index.php?p=userprofil&id_kustomer=<?php echo $d[0]; ?>">USER PROFILE</a></li>					
					<?php } ?>
					<li><a href="index.php?p=kontak">KONTAK</a></li>

					<?php if (isset($_SESSION['id_kustomer']) && isset($_SESSION['username'])) 
					{?>			
					<li><a href="index.php?logout=1" class="button" >LOGOUT</a></li>
				    
				    <?php } else { ?>      
					<li><a href="index.php?p=login">LOGIN</a></li>
					<?php } ?>


				</ul>
			</div>
			<div class="clearfix"> </div>
		<script>
				$("span.menu").click(function(){
					$(" ul.nav").slideToggle("slow" , function(){
					});
				});
		 </script>
		</div>
		<!-- //container -->
	</div>
	<!-- //header -->
	<!-- banner -->
	
	</div>