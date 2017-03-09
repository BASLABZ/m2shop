<style type="text/css">
    h3{
        color: white;   
    }
</style>
<div id="wrapper">
<?php include 'menu.php'; ?>

            <div class="row">
        <div class="col-lg-12">
          <h3 align="center"> Daftar Transaksi</h3>  
        <div class="panel panel-primary">
        <div class="panel-body">
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Order</th>
                                        <th>Nama Kustomer</th>
                                        <th>Tanggal Order</th>
                                        <th>jam Order</th>
                                        <th>Status</th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                        if(isset($_GET['status_order']))
                        {
                            mysql_query("UPDATE orders set status_order = '$_GET[status_order]' where id_orders = '$_GET[id_orders]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from orders where id_orders = '$_GET[del]'");
                            if($sql_del)
                            {
                                header('location:index.php?pos=daftar_order');
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT o.id_orders,o.tgl_order,o.jam_order,k.nama_lengkap,o.status_order
                                     FROM orders o 
                                     inner join
                                     kustomer k
                                     on o.id_kustomer = k.id_kustomer Order BY o.id_orders desc
                                  ";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                               

                        ?>                                                                                
                               <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[0]; ?></td>
                                <td><?php echo $data[3]; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[2]; ?></td>
                             <td align="center">
                                <?php
                                    if($data[4] == 'Baru')
                                    {
                                ?> <a class="btn btn-success" href="index.php?pos=daftar_order&status_order=Lunas&id_orders=<?php echo $data[0]; ?>">Baru</a>
                                   
                                <?php   }
                                else    {   ?>
                                    <a class="btn btn-warning" href="index.php?pos=daftar_order&status_order=Baru&id_orders=<?php echo $data[0]; ?>">Lunas</a>
                                
                                   
                                <?php   }   ?>
                                </td>


                                
                                <td align="center">

                                   
                                    <!-- <a class="btn btn-primary" href="index.php?pos=detail_order&id_orders=<?php //echo $data[0]; ?>">Lihat Pesanan</a> -->
                                <!--     <a class="btn btn-primary" href="index.php?pos=daftar_order_detail&id_orders=<?php //echo $data[0]; ?>">Lihat Pesanan</a> -->
                                
                                    <a class="btn btn-danger" href="index.php?pos=daftar_order&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Hapus</a>
                                </td>
                               
                            </tr>
                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
</div>
                    