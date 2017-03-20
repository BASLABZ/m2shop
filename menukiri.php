<div class="col-sm-3 dim_about" style="background-color: #1ab394 !important; margin-bottom:20px; margin-top: 10px; ">
					<div class="left-sidebar" style="margin-top: 10px; ">
						<h2 class="bas-shadow" style="color:#1ab394; "><span class="fa fa-tag"></span> Kategori</h2>
						<div class="price-range"><!--price-range-->
							
							<select class="form-control select2">
								<option>Filter Kategori</option>
								<?php 
									$queryKategoriProdukfilter = mysql_query("SELECT * FROM kategori_produk order by katpro_id desc");
									while ($rowKategorifilter = mysql_fetch_array($queryKategoriProdukfilter)) 
									{
								?>
								<option value="<?php echo $rowKategorifilter['kat_id']; ?>"><a href="index.php?page=produk_perkategori&id=<?php echo $rowKategorifilter['katpro_id']; ?>" target="_BLANK"><?php echo $rowKategorifilter['kat_nm']; ?></a></option>
								<?php } ?>
							</select>
						</div><!--/price-range-->
						<div class="panel-group category-products" id="accordian">
						<div class="panel panel-default">
								
								<div class="panel panel-default">
									<div class="panel-heading">
									<?php 
												$queryKategoriProduk = mysql_query("SELECT * FROM kategori_produk order by katpro_id desc");
												while ($rowKategori = mysql_fetch_array($queryKategoriProduk)) 
												{
											?>
										<h4 class="panel-title"><a href="index.php?page=produk_perkategori&id=<?php echo $rowKategori['katpro_id']; ?>"style="color: white;"><span class="fa fa-tag"></span> <?php echo $rowKategori['kat_nm']; ?></a></h4>
										<?php } ?>
									</div>
								</div>
								
							</div>
						</div><!--/category-products-->
						
						<div class="price-range"><!--price-range-->
							<h2 class="bas-shadow" style="color: #1ab394;">Price Range</h2>
							<div class="well text-center dim_about">
								 <input type="text" class="span2"  value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">Rp.50.000</b> <b class="pull-right">Rp. 1.000.000</b>
							</div>
						</div><!--/price-range-->
					</div>
				</div>
