<div class="col-md-3 side-bar">
				<div class="categories">
					<h3>KATEGORI</h3>
					<ul>
				<?php 
					$result = mysql_query("SELECT * FROM kategori_produk order by katpro_id desc");
					while ($d = mysql_fetch_array($result)) 
					{
	
				?>

						<li><a href="index.php?p=produk_berdasarkankategori&katpro_id=<?php echo $d[0]; ?>"><?php echo $d[1]; ?></a></li>

				<?php } ?>
					</ul>
				</div>
				
			</div>