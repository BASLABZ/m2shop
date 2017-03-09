<?php 
include 'koneksi.php';
?>
<body onload="window.print()">
<h1 align="Center">Mua-mua Shop</h1>

<P align="Center"> Laporan Data Member</P>

<br>
<center>
<table class="table table-bordered table-striped" style="width:700px" border="1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Member</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                     $sql="SELECT * FROM kustomer inner join kota on  
                     kustomer.id_kota = kota.kota_id order by 
                     kustomer.id_kustomer desc"; 
                      $no=0;
                      $a=mysql_query($sql);
                      while($b=mysql_fetch_array($a)){
                      $no+=1;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $b['nama_lengkap']; ?></td>
                        <td><?php echo $b['email']; ?></td>
                        <td><?php echo $b['telpon']; ?></td>
                        <td><?php echo $b['alamat']; ?></td>
                        <td><?php echo $b['nama_kota']; ?></td>
                      
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