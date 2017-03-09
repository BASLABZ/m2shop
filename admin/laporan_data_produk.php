<?php 
include 'koneksi.php';
?>
<body onload="window.print()">
<h1 align="Center">Mua-mua Shop</h1>
<P align="Center"> Laporan Data Produk</P>

<br>
<center>
<table class="table table-bordered table-striped" style="width:700px" border="1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th> 
                        <th>harga</th>
                        <th>Stok</th>                                               
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                     $sql="SELECT b.id_produk,b.nama_produk,b.harga,k.kat_nm,b.stok
                                        from produk b
                                        INNER JOIN kategori_produk k
                                        On b.katpro_id = k.katpro_id"; 
                      $no=1;
                      $a=mysql_query($sql);
                      while($b=mysql_fetch_array($a)){
                      /*$no+=1;*/
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $b['nama_produk']; ?></td>
                        <td><?php echo $b['kat_nm']; ?></td>
                        <td><?php echo $b['harga']; ?></td>
                       <td><?php echo $b['stok']; ?></td>
                      
                      </tr>
                    <?php
                        $no++;} 
                    ?>
                    </tbody>
            </tr>            
</tbody>
</table>
</center>

</body>