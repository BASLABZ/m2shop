<div class="about">
		<!-- container -->
		<div class="container">
		<?php 
					$kat_id = $_GET['kat_id'];
					$sql_beritakat = mysql_query("SELECT b.berita_id,b.berita_judul,b.mdd,b.berita_des,b.gambar,b.publish,k.kat_nm 
                                    from berita b INNER JOIN kategori k on b.kat_id = k.kat_id 
                                    where k.kat_id = '$kat_id' order by b.berita_id desc" );
									while ($sb=mysql_fetch_array($sql_beritakat)) 
									{
										$gambar=$sb['gambar'];
									
				 ?>
			<div class="about-grids">
				
				<div class="col-md-4 about-left">
					
					
				<?php echo "<img src='admin/images/$gambar'/>"; ?>
				</div>

				<div class="col-md-8 about-middle">
					<h3><?php echo $sb['berita_judul']; ?></h3>
					<h5><?php echo $sb['mdd']; ?></h5>
					<h5><?php echo $sb['kat_nm']; ?></h5>
					<p><?php echo $sb['berita_des']; ?></p>
					<p><a href="index.php?p=detail_berita&berita_id=<?php echo $sb[0]; ?>" 
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