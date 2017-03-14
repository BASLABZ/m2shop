<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
											<h2>SOLUTION<span>YOUR SHOPPING</span></h2>
											<p>Terinspirasi oleh trend fashion yang semakin berkembang pesat, 
											maka kami siap memberikan solusi untuk gaya fashion anda dengan berbagai produk
											yang up to date dan pasti dengan harga terjangkau
											</p>
											<a href="#">BELI SEKARANG</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h2>SOLUTION<span>YOUR STYLE</span></h2>
											<p>Terinspirasi oleh trend fashion yang semakin berkembang pesat, 
											maka kami siap memberikan solusi untuk gaya fashion anda dengan berbagai produk
											yang up to date dan pasti dengan harga terjangkau
											</p>
											<a href="#">BELI SEKARANG</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img">
									<div class="container">
										<div class="banner-info">
											<h2>SOLUTION<span>YOUR TIME</span></h2>
											<p>Terinspirasi oleh trend fashion yang semakin berkembang pesat, 
											maka kami siap memberikan solusi untuk gaya fashion anda dengan berbagai produk
											yang up to date dan pasti dengan harga terjangkau
											</p>
											<a href="#">BELI SEKARANG</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
											<h2>SOLUTION<span>YOUR LIFE</span></h2>
											<p>Terinspirasi oleh trend fashion yang semakin berkembang pesat, 
											maka kami siap memberikan solusi untuk gaya fashion anda dengan berbagai produk
											yang up to date dan pasti dengan harga terjangkau
											</p>
											<a href="#">BELI SEKARANG</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h2>SOLUTION<span>YOUR FASHION</span></h2>
											<p>Terinspirasi oleh trend fashion yang semakin berkembang pesat, 
											maka kami siap memberikan solusi untuk gaya fashion anda dengan berbagai produk
											yang up to date dan pasti dengan harga terjangkau
											</p>
											<a href="#">BELI SEKARANG</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>