	<?php include 'slider.php'; ?>
<div class="products">
	
		<div class="container">
			<div class="products-heading">
				<p></p>
				<h3>PRODUK POPULER</h3>
			</div>
			<div class="products-grids">	
<?php
$batas=4;
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
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id where p.stok>0 order by p.id_produk ASC where p.nama_produk like '%".$cari."%'";
 }
 else{
 $sql="SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,p.gambar,p.public,k.kat_nm 
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id where p.stok>0 order by p.id_produk asc  limit $posisi,$batas";
}
$a=mysql_query($sql);

while($d=mysql_fetch_array($a)){
	$gambar = $d[6];
  
?>
				
				<div class="col-md-3 product-left-grid">
					<div class="product-grid">
						<div class="product-grid-text">
							<?php echo "<img src='admin/images/$gambar' />"; ?>
							<div class="products-grid-info">
								<h3><?php echo $d['nama_produk']; ?></h3>
								<h4><?php echo $d['kat_nm']; ?></h4>
								<p><?php echo $d['deskripsi']; ?></p>
								<div class="price">
									<p>Rp.<?php echo $d['harga']; ?></p>
								</div>
								<div class="like">
									
									<a href="index.php?p=detail_produk&id_produk=<?php echo $d[0]; ?>" class="btn btn-warning">Beli</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
				</div>
				<?php  }?>
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
                        echo "<li><a href=index.php?p=konten&halaman=$previous>Previous</a></li> ";
                        }else {
                        echo " <li><a>Previous</a></li>" ;}

                        for ($i=1; $i<=$jmlhalaman;$i++)
                        if ($i !=$_GET['halaman']){
                        echo "<li><a href=index.php?p=konten&halaman=$i>$i</a></li>";
                        }else {
                        echo "<li><a>$i</a></li>";}

                        if ($_GET['halaman'] < $jmlhalaman){
                        $next=$_GET['halaman']+1;
                        echo "  <li><a href=index.php?p=konten&halaman=$next>Next</a></li>   ";
                        }else {
                        echo " <li><a>Next</a></li> ";}
                        ?> 
                        </ul>
                    </center>
                        </div>
				
				<div class="clearfix"> </div>
				
			</div>
			<?php include 'produkbaru.php'; ?>
		</div>
		<!-- //container -->
	</div>