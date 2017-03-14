<div class="about">
		<!-- container -->
		<div class="container">
		<?php 
					$berita_id = $_GET['berita_id'];
					$sql_beritakat = mysql_query("SELECT b.berita_id,b.berita_judul,b.mdd,b.berita_des,b.gambar,b.publish,k.kat_nm 
                                    from berita b INNER JOIN kategori k on b.kat_id = k.kat_id 
                                    where b.berita_id = '$berita_id'" );
									while ($sb=mysql_fetch_array($sql_beritakat)) 
									{
										$gambar=$sb['gambar'];
									
				 ?>
			<div class="about-grids">
				
				
				<div class="col-md-8 about-middle">
					<?php echo "<img src='admin/images/$gambar' class='img-thumbnail'/>"; ?>
					<h3><?php echo $sb['berita_judul']; ?></h3>
					<h5><?php echo $sb['mdd']; ?></h5>
					<h5><?php echo $sb['kat_nm']; ?></h5>
					<p><?php echo $sb['berita_des']; ?></p>
				</div>
				

			</div>
				<div class="clearfix"> </div>
				<hr>
			<?php } ?>
							
		</div>
		<!-- container -->
	</div>