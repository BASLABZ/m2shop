<div class="about">
		<!-- container -->
		<div class="container">
		<?php 
					$idcara = $_GET['idcara'];
					$sql_cara = mysql_query("SELECT * from caraorder where idcara='$idcara'" );
					while ($sb=mysql_fetch_array($sql_cara)) 
					{
					
									
				 ?>
			<div class="about-grids">
				
				
				<div class="col-md-8 about-middle">
					<h3><?php echo $sb['judul']; ?></h3>
					<p><?php echo $sb['deskripsi']; ?></p>
				</div>
				

			</div>
				<div class="clearfix"> </div>
				<hr>
			<?php } ?>
							
		</div>
		<!-- container -->
	</div>