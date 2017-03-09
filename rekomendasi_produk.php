<div class="related">
						<h3 align="center">Produk Populer</h3>
						<div class="related-grids">
						<?php
$batas=5;
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
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id order by p.id_produk asc where p.nama_produk like '%".$cari."%'";
 }
 else{
 $sql="SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,p.gambar,p.public,k.kat_nm 
                            from produk p INNER JOIN kategori_produk k on p.katpro_id = k.katpro_id order by p.id_produk asc limit $posisi,$batas";
}
$a=mysql_query($sql);

while($d=mysql_fetch_array($a)){
	$gambar = $d[6];
  
?>
							<div class="related-grid">
								<div class="col-md-9 related-left">
									<div class="col-md-3 related-left-left">
										<?php echo "<img src='admin/images/$gambar' > "; ?>
									</div>
									<div class="col-md-9 related-left-right">
										<h5><?php echo $d[1]; ?></h5>
										<p><?php echo $d[4]; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-3 related-right">
									<p>Rp <?php echo $d[3]; ?></p>
									<a href="#">Beli</a>
								</div>
								<div class="clearfix"> </div>
							</div>
				<?php } ?>
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