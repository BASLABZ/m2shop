<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs dim_about"  style="background-color: #1ab394; border-bottom: 1px solid #FE980F;">
								<li class="active"><a style="color: white;" href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a style="color: white;" href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a style="color: white;" href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a style="color: white;" href="#kids" data-toggle="tab">Kids</a></li>
								<li><a style="color: white;" href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<?php 
							$queryProduk = mysql_query("SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,
                            p.gambar,p.public,k.kat_nm from produk p INNER JOIN kategori_produk k on 
                            p.katpro_id = k.katpro_id order by p.id_produk desc limit 9");
                            while ($rowProduk = mysql_fetch_array($queryProduk)) {
						 ?>
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper bas-shadow">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
							
						</div>
					</div><!--/category-tab-->