<div class="container" style="margin-top: 30px;">
	<div class="row">
		<?php include 'menukiri.php'; ?>
		<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center" style="color: #1ab394;">Cara Pesan </h2>
						<div class="single-blog-post">
							
							<a href="">
								<img src="assets/images/blog/blog-one.jpg" alt="" class="bas-shadow">
							</a>
							<?php 	$sql_cara   = mysql_query("SELECT * from caraorder ORDER BY idcara DESC" );
													while ($sb=mysql_fetch_array($sql_cara)) 
													{	?>
							<h3><?php echo $sb['judul']; ?></h3>						
							<p>
								<?php echo $sb['deskripsi']; ?>
							</p> 
							<?php } ?>
						</div>
					</div>
				</div>	
	</div>
</div>