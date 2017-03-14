<div class="about">
		<!-- container -->
		<div class="container">
		
			<div class="about-grids">
				
				<div class="col-md-12 about-left">
					
					<table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kota</th>
                                        <th>Ongkos Kirim</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                        
                        
                            $no = 1;
                            $sql = "SELECT * from kota ORDER BY kota_id DESC";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                        	?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[2]; ?></td>                          
                               
                            </tr>
                    	    <?php $no++; } ?>

                   
                                    </tbody>
                                </table>
					
				</div>

			</div>
				<div class="clearfix"> </div>
				<hr>
			
			<?php //include 'berita_terbaru.php'; ?>

		</div>
		<!-- container -->
	</div>