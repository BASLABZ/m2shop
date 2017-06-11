<?php 
		$id = $_GET['id'];
		$detail = mysql_fetch_array(mysql_query("SELECT p.id_produk,p.status,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,
                            p.gambar,p.public,k.kat_nm,k.katpro_id from produk p INNER JOIN kategori_produk k on 
                            p.katpro_id = k.katpro_id where p.id_produk='".$id."' order by p.id_produk desc limit 9 "));
 ?>
<section>
		<div class="container">
			<div class="row">
				<?php include 'menukiri.php'; ?>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details">
						<div class="col-sm-5 ">
							<div class="view-product  bas-shadow">
								<div class="">
							        <div class="xzoom-container">
							          <img class="xzoom" id="xzoom-default" src="admin/images/<?php echo $detail['gambar']; ?>" xoriginal="admin/images/<?php echo $detail['gambar']; ?>" style="height: 360px;" />
							        </div>        
							      </div>
								<!-- <h3>ZOOM</h3> -->
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information bas-shadow">
								<img src="assets/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $detail['nama_produk']; ?></h2>
								<p>ID PRODUK: <?php echo $detail['id_produk']; ?></p>
								
								<span>
									<span>Rp. <?php echo rupiah($detail['harga']); ?></span>
									<label></label>
									<label></label>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> <?php echo $detail['status']; ?></p>
								<p><b>Kategori :</b> <?php echo $detail['kat_nm']; ?></p>
								
								<p align="center">
									<a  href="aksi.php?module=keranjang&act=tambah&id=<?php echo $detail[0]; ?>" class="btn btn-default get dim_about" style="background-color: #1ab394;">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</a>
								</p>

							</div>
						</div>
					</div>
					
					<div class="category-tab shop-details-tab bas-shadow">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Deskripsi</a></li>
								<li class=""><a href="#details" data-toggle="tab">Simulasi Ongkir</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php echo $detail['tgl_posting']; ?></a></li>
									</ul>
									<p><?php echo $detail['deskripsi']; ?></p>
									
								</div>
							</div>
							<div class="tab-pane fade" id="details">
								<div class="col-md-12">
									<div class="row">
										<div class="contact-form">
	    				<div class="status alert alert-success" style="display: none"></div>
				    	 <div class="row">
				    	 	<div class="role">
				    	 	<br>
				    	 		<div class="form-group row">
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-6" align='right'>Asal Propinsi</label>
					    	 			<div class="col-md-6">
					    	 				<select id="oriprovince" class="select2">
												<option>Propinsi</option>
											</select>
					    	 			</div>
				    	 			</div>
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-3" align='left'>Asal Kota</label>
					    	 			<div class="col-md-6">
					    	 			<p align="left">
					    	 				<select id="oricity" class="select2"><option>Kota</option></select></p>
					    	 			</div>
				    	 			</div>
				    	 		</div>
				    	 		<!-- tujuan -->
				    	 		<div class="form-group row">
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-6" align='right'>Tujuan Propinsi</label>
					    	 			<div class="col-md-6">
					    	 				<select id="desprovince" class="select2"><option>Provinsi</option></select>
					    	 			</div>
				    	 			</div>
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-3" align='left'>Tujuan Kota</label>
					    	 			<div class="col-md-6">
					    	 			<p align="left">
					    	 				<select id="descity" class="select2"><option>Kota</option></select></p>
					    	 			</div>
				    	 			</div>
				    	 		</div>
				    	 		<!-- beerar dan layanan -->
				    	 		<div class="form-group row">
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-6" align='right'>Layanan</label>
					    	 			<div class="col-md-3">
					    	 				<select id="service" class="six columns">
												<option value="jne">JNE</option>
												<option value="pos">POS</option>
												<option value="tiki">TIKI</option>
										</select>
					    	 			</div>
				    	 			</div>
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-3" align='left'>Berita / gram</label>
					    	 			<div class="col-md-4">
					    	 			<p align="left">
					    	 				<input type="number" style="width: 100px;" id="berat" ></p>
					    	 			</div>
					    	 			<div class="col-md-12">
					    	 				<button id="btncheck" class="btn btn-default get dim_about" onclick="CekHarga()">
					    	 				<span class="fa fa-truck fa-2x"></span> CEK HARGA</button>
					    	 			</div>
				    	 			</div>
				    	 		</div>
				    	 		<hr>
				    	 		<div class="row">
				    	 			<div class="col-md-12">
				    	 				<div class="col-md-12">
				    	 				<table class="table table-responsive">
				    	 				<thead>
										<th>Aksi</th>
										<th>Service</th>
										<th>Nama Paket</th>
										<th>Lama Kirim</th>
										<th>Total Biaya</th>
									</thead>	
									<tbody id="resultsbox"></tbody>
				    	 			</table>
				    	 			</div>
				    	 			</div>
				    	 		</div>
				    	 	</div>
				    	 </div>
	    			</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- <div class="recommended_items">
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="assets/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="assets/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="assets/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="assets/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="assets/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="assets/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div> -->
					
				</div>
			</div>
		</div>
	</section>
	 