<div class="men">
		<!-- container -->
		<div class="container">
			<div class="col-md-9 fashions">
				<div class="title">
					<h3>Daftar Produk Kami</h3>
				</div>
				<div class="fashion-section">
					<div class="fashion-grid1">
						<?php
$batas=12;
$no=1;
if(empty($_GET['halaman']))
{
$posisi=0;
$_GET['halaman']=1;
}
else {
$posisi=($_GET['halaman']-1)*$batas;
}
 if(isset($_POST['cari'])){
$cari=$_POST['cari'];
$sql="SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,p.gambar,p.public,k.kat_nm 
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id where p.stok>0 order by p.id_produk desc where p.nama_produk like '%".$cari."%'";
 }
 else{
 $sql="SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,p.gambar,p.public,k.kat_nm 
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id where p.stok>0 order by p.id_produk desc limit $posisi,$batas";
}
$a=mysql_query($sql);

while($d=mysql_fetch_array($a)){
	$gambar = $d[6];
  
?>


						 <div class="col-md-3 fashion-grid">
							 <a href="single.html">

							 	<?php echo "<img src='admin/images/$gambar' width='275' height='275'> "; ?>
								 <div class="product">
									 <h3><?php echo $d[1]; ?></h3>
									 <p><span></span> Rp <?php echo $d[3]; ?></p>								 
								 </div>							 
							 </a>
							 <div class="fashion-view"><span></span>
										<div class="clearfix"></div>
									 <h4><a href="index.php?p=detail_produk&id_produk=<?php echo $d[0]; ?>"
									 >Lihat Produk</a></h4>
							 </div>
						 </div>
						 <?php } ?>
						 <div class="clearfix"></div>
						 <div id="dataTables-example_paginate" class="dataTables_paginate paging_simple_numbers">
                      <center>
                        <ul class="pagination">
                        <?php
                        $query_string2="SELECT * FROM produk";
                        $query2=mysql_query($query_string2);
                        $jml=mysql_num_rows($query2);
                        $jmlhalaman=ceil($jml/$batas);

                        if ($_GET['halaman'] >1){
                        $previous=$_GET['halaman']-1;
                        echo "<li><a href=index.php?p=produk&halaman=$previous>Previous</a></li> ";
                        }else {
                        echo " <li><a>Previous</a></li>" ;}

                        for ($i=1; $i<=$jmlhalaman;$i++)
                        if ($i !=$_GET['halaman']){
                        echo "<li><a href=index.php?p=produk&halaman=$i>$i</a></li>";
                        }else {
                        echo "<li><a>$i</a></li>";}

                        if ($_GET['halaman'] < $jmlhalaman){
                        $next=$_GET['halaman']+1;
                        echo "  <li><a href=index.php?p=produk&halaman=$next>Next</a></li>   ";
                        }else {
                        echo " <li><a>Next</a></li> ";}
                        ?> 
                        </ul>
                    </center>
                        </div>
					</div>
					
					
				</div>
			</div>
			
			<?php include 'kategori_produk.php'; ?>

			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>