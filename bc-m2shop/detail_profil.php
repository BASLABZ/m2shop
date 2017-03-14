<div class="about">
		<!-- container -->
		<div class="container">
		<?php 
					$profil_id = $_GET['profil_id'];
					$sql_profil = mysql_query("SELECT * from profil where profil_id='$profil_id'" );
					while ($sb=mysql_fetch_array($sql_profil)) 
					{
					$gambar=$sb['gambar'];
									
				 ?>
			<div class="about-grids">
				
				
				<div class="col-md-8 about-middle">
					<?php echo "<img src='admin/images/$gambar' class='img-thumbnail'/>"; ?>
					<h3><?php echo $sb['profil_nm']; ?></h3>
					<p><?php echo $sb['profil_des']; ?></p>
				</div>
				

			</div>
				<div class="clearfix"> </div>
				<hr>
			<?php } ?>
							
		</div>
		<!-- container -->
	</div>