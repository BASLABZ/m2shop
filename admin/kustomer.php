<div id="wrapper">

<?php include 'menu.php'; ?>

    <div id="page-wrapper">

            <div class="row">
        <div class="col-lg-12">
            <h2>Daftar Data Kustomer/Member</h2>
            
        <div class="panel-body">
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="11%">Nama Pengguna</th>                                        
                                        <th width="8%">Email</th>
                                        <th width="8%">No. Telpon</th> 
                                        <th width="20%"><center>Alamat</center></th>
                                        <th width="10%"><center>Kota</center></th>
                                        <th width="5%"><center>Username</center></th> 
                                        <th width="5%"><center>Aksi</center></th>                                       
                                    </tr>
                                </thead>
                                <tbody>

                            <?php
                            /*fungsi untuk blokir kustomer*/
                            if (isset($_GET['del'])) {
                                $sql_hapus_kustomer = mysql_query("DELETE FROM kustomer where id_kustomer = '$_GET[del]'");
                                if ($sql_hapus_kustomer) {
                                    echo "<script> alert(' Data berhasil dihapus'); location.href='index.php?pos=kustomer' </script>";exit;
                                }
                            }
                            elseif (isset($_GET['aktif'])) {
                                        mysql_query("UPDATE kustomer set aktif = '$_GET[aktif]' where id_kustomer='$_GET[id_kustomer]'");
                                    } 
                                    ?>       
                        <?php
                            $no = 1;
                            $sql = "SELECT k.id_kustomer, k.username, k.password, k.nama_lengkap,
                                    k.alamat, k.email, k.telpon, ko.nama_kota, k.aktif
                                    from kustomer k 
                                    inner join kota ko
                                    on k.id_kota = ko.kota_id 
                                    ORDER BY k.id_kustomer DESC";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                            ?>
                            
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[3]; ?></td>
                                <td><?php echo $data[5]; ?></td>
                                <td><?php echo $data[6]; ?></td>
                                <td><center><?php echo $data[4]; ?></center></td>
                                <td><center><?php echo $data[7]; ?></center></td> 
                                <td><center><?php echo $data[1]; ?></center></td>   
                                <td align="center">
                                <a href="index.php?pos=kustomer&del=<?php echo $data[0]; ?>" onclick="return confirm(
                                'Anda Yakin Ingin Menghapus Member Ini ?')"
                                class="btn btn-danger">Hapus</a>
                                <?php if ($data[8] == 'Y'){                                    
                                 ?>
                                    <a href="index.php?pos=kustomer&aktif=N&id_kustomer=
                                    <?php echo "$data[0]"; ?>" class="btn btn-warning"  >Blokir</a>
                                <?php } else  { ?>
                                    <a href="index.php?pos=kustomer&aktif=Y&id_kustomer=
                                    <?php echo "$data[0]"; ?>" class="btn btn-primary" >Aktif</a>
                                <?php } ?>
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