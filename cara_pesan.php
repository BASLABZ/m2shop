<div class="about">
		<!-- container -->
		<div class="container">
		<?php 
					
					$sql_cara   = mysql_query("SELECT * from caraorder ORDER BY idcara DESC" );
									while ($sb=mysql_fetch_array($sql_cara)) 
									{
										
									
				 ?>
			<div class="about-grids">
				
				<div class="col-md-12 about-left">
					
					
					<h3><?php echo $sb['judul']; ?></h3>
					<p><?php echo $sb['deskripsi']; ?></p>
					<p><a href="index.php?p=detail_cara_pesan&idcara=<?php echo $sb[0]; ?>" 
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