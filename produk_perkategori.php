<?php 
		$id = $_GET['id'];
 ?>
 <section id="advertisement">
		<div class="container">
			<div style="background-color: rgb(255, 173, 65); width:auto; height: 100px; color: white;" class="dim_about">
				<center><h3 style="color: white; padding-top: 30px; font-family: 'Roboto', sans-serif;">M2SHOP - <i>ONLINE SHOP TERPERCAYA DAN TERUPDATE PRODUKNYA</i></h3></center>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<?php include 'menukiri.php'; ?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center" style="color: #1ab394;">PRODUK M2SHOP</h2>
						<?php 
							$queryProduk = mysql_query("SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,
                            p.gambar,p.public,k.kat_nm from produk p INNER JOIN kategori_produk k on 
                            p.katpro_id = k.katpro_id   where k.katpro_id='".$id."' order by p.id_produk desc limit 9");
                            while ($rowProduk = mysql_fetch_array($queryProduk)) {
						 ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper bas-shadow bas-shadow">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="admin/images/<?php echo $rowProduk['gambar']; ?>" alt=""  style='width: 268px; height: 249px;'/>
											<h2 style="color: #1ab394;">Rp. <?php echo rupiah($rowProduk['harga']); ?></h2>
											<p><?php echo $rowProduk['nama_produk']; ?></p>
											<a href="aksi.php?module=keranjang&act=tambah&id=<?php echo $rowProduk['id_produk']; ?>" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
										</div>	
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="index.php?page=detail_produk&id=<?php echo $rowProduk['id_produk']; ?>"><i class="fa fa-plus-square"></i>Lihat Produk</a></li>
									</ul>
								</div>
								
							</div>
						</div>
						<?php } ?>
						
					</div>
					<!--features_items-->
					<!-- tab kategori produk -->
					<?php //include 'tabkategoriproduk.php'; ?>
					
					<?php //include 'produkrekomendasi.php'; ?>
					
				</div>
			</div>
		</div>
	</section>