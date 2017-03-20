<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center" style="color: #1ab394;">REKOMENDASI PRODUK</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		
		<div class="item">	
		<?php 
			$queryProduk = mysql_query("SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,
            p.gambar,p.public,k.kat_nm from produk p INNER JOIN kategori_produk k on 
            p.katpro_id = k.katpro_id order by p.id_produk asc limit 9");
            while ($rowProduk = mysql_fetch_array($queryProduk)) {
		 ?>
			<div class="col-sm-4">

				<div class="product-image-wrapper bas-shadow">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="assets/images/home/recommend1.jpg" alt="" />
							<h2>Rp.<?php echo rupiah($rowProduk['harga']); ?></h2>
							<p><?php echo $rowProduk['nama_produk']; ?></p>
							<a href="#" class="btn btn-default add-to-cart dim_about" style="background-color: #1ab394; color:white;"><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
						</div>
						
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
		
	</div>
	 <a class="left recommended-item-control bas-shadow" href="#recommended-item-carousel" data-slide="prev" >
		<i class="fa fa-angle-left"></i>
	  </a>
	  <a class="right recommended-item-control bas-shadow" href="#recommended-item-carousel" data-slide="next">
		<i class="fa fa-angle-right" ></i>
	  </a>			
</div>
</div><!--/recommended_items-->