<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Biruang an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Biruang Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!--js-->
<script src="js/jquery.min.js"></script>
<!--/js-->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
</head>
<body>

	<div class="single">
		<!-- container -->
		<div class="container">
			<div class="single-grids">
				<div class="col-md-9">
				<?php 
					$id_produk = $_GET['id_produk'];
					$sql_beritakat = mysql_query("SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,p.gambar,p.public,k.kat_nm 
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id
                            where p.id_produk='$id_produk'" );
									while ($sb=mysql_fetch_array($sql_beritakat)) 
									{
										$gambar=$sb['gambar'];
									
				 ?>
					<div class="single-left-left">
						<ul id="etalage" class="etalage" style="display: block; width: 300px; height: 533px;">
						    <li class="etalage_thumb thumb_4 etalage_thumb_active" style="display: list-item; opacity: 1; background-image: none;">
							<?php echo "<img class='etalage_thumb_image' src='admin/images/$gambar' style='display: inline; width: 300px; height: 400px; opacity: 1;'>"; ?>	
							<?php echo "<img class='etalage_source_image' src='admin/images/$gambar'>"; ?>	
							</li>
						 <div class="clearfix"></div>		
					</div>
					<div class="single-left-right">
						<div class="single-left-info">
							<h3>Nama Produk :<?php echo $sb['nama_produk']; ?></h3>
							<p>Harga : Rp.<?php echo $sb['harga']; ?></p>
							<p>Kategori : <?php echo $sb['kat_nm']; ?></p>
							
						</div>
						<div class="select-size">
							
							<div class="buy-now">
								<a href="aksi.php?module=keranjang&act=tambah&id=<?php echo $sb[0]; ?>">Beli</a>
							</div>
							<div class="wishlist">
								
								<!-- pop-up-box -->
								<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
								<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								
								<script>
										$(document).ready(function() {
										$('.popup-with-zoom-anim').magnificPopup({
											type: 'inline',
											fixedContentPos: false,
											fixedBgPos: true,
											overflowY: 'auto',
											closeBtnInside: true,
											preloader: false,
											midClick: true,
											removalDelay: 300,
											mainClass: 'my-mfp-zoom-in'
										});
																										
										});
								</script>	
							</div>
							<div class="clearfix"> </div>
							
							
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="product-details">
						<h3>Deskripsi Produk</h3>
						<p><?php echo $sb['deskripsi']; ?>
						</p>
					</div>
				<?php } ?>
					<?php include 'rekomendasi_produk.php'; ?>
				</div>
				<?php include 'kategori_produk.php'; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //single -->
	<!-- footer -->
	
	<!-- //footer -->
</body>
</html>