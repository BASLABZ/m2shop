<?php 
		$id = $_GET['id'];
		$rowprofil = mysql_fetch_array(mysql_query("SELECT * from profil where profil_id='".$id."'" ));

 ?>
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-3 bas-shadow">
			<div class="brands_products "><!--brands_products-->
							<h2>PROFIL M2SHOP</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php 
                                        $queryProfil = mysql_query("SELECT * FROM profil");
                                        while ($subprofil = mysql_fetch_array($queryProfil)) {
                                         ?>
									<li><a href="index.php?page=detail_profil&id=<?php echo $subprofil['profil_id']; ?>"> <span class="pull-right"></span><?php echo $subprofil['profil_nm']; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
		</div>
		<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center" style="color: #1ab394;"><?php echo $rowprofil['profil_nm']; ?></h2>
						<div class="single-blog-post">
							<a href="">
								<img src="admin/images/<?php echo $rowprofil['gambar']; ?>" alt="" class="bas-shadow">
							</a>
							<p align="center">
								<?php echo $rowprofil['profil_des']; ?>
							</p> 
							
						</div>
					</div>
				</div>	
	</div>
</div>