
<script>
function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}
</script>
<style type="text/css">
	.cart_total_price{
		font-size: 12px;
	}
	/*.cart_info{
		background-color: #1ab394;
	}*/
</style>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info bas-shadow">
				<table class="table table-condensed" >
					<thead>
						<tr class="cart_menu">
							<td>No</td>
							<td class="image">Gambar</td>
							<td class="description">Nama Produk</td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Sub Total</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$sid = session_id();
							$query = mysql_query("SELECT * FROM orders_temp, produk 
		                    WHERE id_session='$sid' AND 
		                      orders_temp.id_produk=produk.id_produk");
							while ($row = mysql_fetch_array($query)) {
								$subtotal = $row['harga']*$row['jumlah'];
								
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td class="cart_product">
									<a href=""><img src="admin/images/<?php echo $row['gambar']; ?>" alt="" style="width: 110px; height: 110px;"></a>
								</td>
								<td class="cart_description">
									<h4><a href=""><?php echo $row['nama_produk']; ?></a></h4>
									
								</td>
								<td class="cart_price">
									<p>Rp. <?php echo "<input type='hidden' value='".$row['harga']."' id='biaya".$no."'>"; ?>
									<?php echo rupiah($row['harga']); ?>
									</p>

								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										
									<?php echo "<input type='number' id='jumlah".$no."' onchange='hitung(".$no.")' onkeyup='hitung(".$no.")' value='1' name='jumlah[]' min='1' class='jumlahotomatis'  />"; ?>
										
									<?php 
										$querystok = mysql_query("SELECT stok from produk where id_produk = '".$row['id_produk']."'");
										$rowStok = mysql_fetch_array($querystok);
										
									 ?>
									 <?php echo "<input type='hidden' value='".$rowStok['stok']."' id='stokTersedia".$no."'>"; ?>
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">Rp. <?php echo " <label class='cart_total_price' id='subtotalf".$no."'>".rupiah($subtotal)."</label>"; ?>
									<?php echo "<input type='hidden' name='subtotal[]' id='subtotal".$no."' 
                                                    value='".$subtotal."' class='subtotalz'/>"; ?>
									 </p>
								</td>
								<td class="cart_delete">
									<a href="aksi.php?module=keranjang&act=hapus&id=<?php echo $row['id_orders_temp']; ?>" class="btn btn-danger" style="background-color: red;"><span class="fa fa-times"></span> </a>
								</td>
						</tr>
						<?php } ?>
						

						
					</tbody>
					 <tfoot>
			              <tr>
			                <td colspan="4" class="text-right"></td>
			                <td><input type="text"  id="totaljum" name="totaljumlahSEMUAITEM" disabled=""> </td>
			                <td> <input type="text"  id="totalsus" disabled=""></td>
			              
			              </tr>
			         </tfoot>
				</table>
				
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-9">
					<div class="heading bas-shadow" style="background-color: #1ab394; ">
				<h3 style="padding-left: 300px; color: white;" > <span class="fa fa-tag"></span> Simulasi Ongkos Kirim </h3>
			</div>
					<div class="chose_area bas-shadow">

						<div class="role">
				    	 	<br>
				    	 		<div class="form-group row">
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-6" align='right'>Asal</label>
					    	 			<div class="col-md-6">
					    	 				<select id="oriprovince" class="select2">
												<option>Propinsi</option>
											</select>
					    	 			</div>
				    	 			</div>
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-3" align='left'>Kota</label>
					    	 			<div class="col-md-6">
					    	 			<p align="left">
					    	 				<select id="oricity" class="select2"><option>Kota</option></select></p>
					    	 			</div>
				    	 			</div>
				    	 		</div>
				    	 		<!-- tujuan -->
				    	 		<div class="form-group row">
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-6" align='right'>Tujuan</label>
					    	 			<div class="col-md-6">
					    	 				<select id="desprovince" class="select2"><option>Provinsi</option></select>
					    	 			</div>
				    	 			</div>
				    	 			<div class="col-md-6">
				    	 				<label class="col-md-3" align='left'>Kota</label>
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
				    	 				<label class="col-md-3" align='left'>Berat / gram</label>
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
				<div class="col-sm-3">
					<div class="total_area  bas-shadow">
						<ul>

							<li>Total Bayar <input type="text" readonly id="totalpenyewaan" name="totalpenyewaanBayar" class="form-control" disabled></li>
							<li>Jumlah <input type="text" readonly id="totalitems" name="totalpenyewaanBayar" class="form-control" disabled></li>
						</ul>
							<div href="" class="pull-right"><button type="button" data-toggle="tooltip" data-placement="top"
                         title="HITUNG PINJAMAN" onclick="hitungFIX()" class="btn btn-primary dim btn-small-dim" id="hitungsemua"><span class="fa fa-calculator"> </span> Hitung </button></div>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/#do_action-->
	<script type="text/javascript">
		function hitung(no) {
			   var stokTersedia = document.getElementById('stokTersedia'+no).value;
        var jumlah  = document.getElementById('jumlah'+no).value;
        var biaya   =  $('#biaya'+no).val();
        var subtotal = jumlah*biaya;
        var total = total+subtotal;
        document.getElementById('subtotalf'+no).innerHTML = subtotal;
        $('#subtotal'+no).val(subtotal);
        var subtotaljumlah = 0;
        var jumlahotomatis = 0;

        $('input.jumlahotomatis').each(function () {
           var jumx = parseInt(this.value, 10);

          if (!isNaN(jumx)) {
              jumlahotomatis += jumx;
          }
        })

        $('input.subtotalz').each(function () {
           var num = parseInt(this.value, 10);

          if (!isNaN(num)) {
              subtotaljumlah += num;
              console
          }
        })

        $('#totalsus').val(subtotaljumlah);
        $('#totaljum').val(jumlahotomatis);
        // hitungTotalNIlai();
        var cekData  = stokTersedia-jumlah;
        if (cekData < 0) {
          alert('MAAF STOK TIDAK MENCUKUPI');
          document.getElementById('jumlah'+no).value='1';
          var biayas   =  $('#biaya'+no).val();
          var subtotals = 1*biaya;
          var totals = totals+subtotals;
          document.getElementById('subtotalf'+no).innerHTML = subtotals;
          $('#subtotal'+no).val(subtotals);
          hitung(1);
        	}
		}
		var hasilakahir = 0;
		function hitungFIX() {

		    
		    var subtotalFIX = document.getElementById('totalsus').value;
		    
		    var jumlahiten =  document.getElementById('totaljum').value;
		    var totalBayarFIX = subtotalFIX*jumlahiten;
		  
		    $('#totalpenyewaan').val(totalBayarFIX);
		    $('#totalitems').val(jumlahiten);

		}
	</script>