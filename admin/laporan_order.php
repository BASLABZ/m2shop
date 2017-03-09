<?php 
include 'koneksi.php';
if (isset($_POST['cetak'])){
  $per1=$_POST['periode1'];
  $per2=$_POST['periode2'];
  $sql = "SELECT o.id_orders,o.tgl_order,k.nama_lengkap,d.jumlah,ko.nama_kota FROM orders o 
          inner join orders_detail d
          on o.id_orders = d.id_orders
          cross join produk p 
          on d.id_produk = p.id_produk 
          cross join kustomer k 
          on o.id_kustomer = k.id_kustomer 
          cross join kota ko on k.id_kota = ko.kota_id 
          WHERE o.tgl_order BETWEEN '$per1' AND '$per2' ";
/*
  $sql="SELECT o.id_orders,o.tgl_order,o.jam_order,k.nama_lengkap,o.status_order
                                     FROM orders o 
                                     inner join
                                     kustomer k
                                     on o.id_kustomer = k.id_kustomer 
                                    WHERE o.tgl_order BETWEEN '$per1' AND '$per2'"; */
}?>
<body onload="window.print()">
<h1 align="Center">Mua-mua Shop</h1>
<P align="Center"> Laporan Order Periode</P>
<P align="Center"> Periode <?php  echo $per1." s/d ".$per2; ?></P>
<br>
<center>
<table class="table table-bordered table-striped" style="width:700px" border="1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No Order</th>
                        <th>Nama Member</th>
                        <th>Tanggal Order</th>
                        <th>Jumlah</th>
                        <th>Kota Tujuan</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                      $no=1;
                      $a=mysql_query($sql);
                      while($b=mysql_fetch_array($a)){
                     
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $b['id_orders']; ?></td>
                        <td><?php echo $b['nama_lengkap']; ?></td>
                        <td><?php echo $b['tgl_order']; ?></td>
                        <td><?php echo $b['jumlah']; ?></td>
                        <td><?php echo $b['nama_kota']; ?></td>
                      </tr>
                    <?php
                       $no++; } 
                    ?>
                    </tbody>
            </tr>            
</tbody>
</table>
</center>

</body>