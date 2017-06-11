<?php $id = $_GET['id']; ?>

<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-3" style="margin-bottom: 15px;">
			<div class="brands_products  bas-shadow "><!--brands_products-->
							<h2>Kategori Berita</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									 <?php 
											$querykategoriBerita = mysql_query("SELECT * FROM kategori");
											while ($kategori = mysql_fetch_array($querykategoriBerita)) {
										 ?>
									<li><a href="index.php?page=detail_berita&id=<?php echo $kategori['kat_id']; ?>"> <span class="pull-right"></span><?php echo $kategori['kat_nm']; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
		</div>
				<div class="col-sm-9 bas-shadow" style="margin-bottom: 10px;">
					
					<?php 
						$queryberita = mysql_query("SELECT b.berita_id,b.berita_judul,b.mdd,b.berita_des,b.gambar,b.publish,k.kat_nm 
                                    from berita b INNER JOIN kategori k on b.kat_id = k.kat_id  where b.berita_id='".$id."' ORDER by b.berita_id DESC");
						while ($rowbarita = mysql_fetch_array($queryberita)) {
					 ?>
					 <div class="blog-post-area">
						<div class="single-blog-post">
							<h3><?php echo $rowbarita['berita_judul']; ?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i>Admin</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> <?php echo $rowbarita['mdd']; ?></li>
								</ul>
							</div>
							<a href="">
								<img src="admin/images/<?php echo $rowbarita['gambar']; ?>" alt="">
							</a>
							<p><?php echo $rowbarita['berita_des']; ?></p>
							<a class="btn btn-primary" href="">Baca Selengkapnya</a>
						</div>
					</div>
					<hr>
					<?php } ?>
					<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
				</div>	
	</div>

</div>