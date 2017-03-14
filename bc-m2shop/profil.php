<div class="about">
		<!-- container -->
		<div class="container">
		<?php 
					
					$sql_profil   = mysql_query("SELECT * from profil ORDER BY profil_id DESC" );
									while ($sb=mysql_fetch_array($sql_profil)) 
									{
										$gambar=$sb['gambar'];
									
				 ?>
			<div class="about-grids">
				
				<div class="col-md-4 about-left">
					
					
				<?php echo "<img src='admin/images/$gambar'/>"; ?>
				</div>

				<div class="col-md-8 about-middle">
					<h3><?php echo $sb['profil_nm']; ?></h3>
					<p><?php echo $sb['profil_des']; ?></p>
					<p><a href="index.php?p=detail_profil&profil_id=<?php echo $sb[0]; ?>" 
					class="btn btn-primary">Baca Selengkapnya</a></p>
				</div>

			</div>
				<div class="clearfix"> </div>
				<hr>
			<?php } ?>
			<?php //include 'berita_terbaru.php'; ?>

		</div>
		<!-- container -->
	</div>