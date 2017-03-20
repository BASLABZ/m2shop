<div id="contact-page" class="container">
    	<div class="bg" style="margin-top: 25px; margin-bottom: 25px;">
    		<div class="row  bas-shadow">  	
	    		<div class="col-sm-12">
	    			<div class="contact-form">
	    				<h3 class="title text-center" style="color: #1ab394;">Simulasi Ongkos Kirim [POS,JNE,TIKI]</h3>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	
	    			</div>
	    		</div>
	    		
	    	</div> 
	    	<div class="row  bas-shadow">  	
	    		<div class="col-sm-12">
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