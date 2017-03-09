<div id="wrapper">

<?php include 'menu.php'; ?>

    <div id="page-wrapper">

            <div class="row">
        <div class="col-lg-12">
            <h2>Daftar Data Produk</h2>
            <a href="index.php?pos=tambah_produk" class="btn btn-primary" enctype="multipart/form-data">Tambah Data</a><br><br>
            <div class="panel panel-primary">
        <div class="panel-body">
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="11%">Nama Produk</th>                                        
                                        <th width="8%">Kategori</th>
                                        <th width="12%">Tanggal Posting</th> 
                                        <th width="3%">Harga</th>
                                        <th width="20%">Deskripsi</th>
                                        <th width="2%"><center>Stok</center></th>
                                        <th width="8%"><center>Gambar</center></th>
                                        <!-- <th width="3%"><center>Publish</center></th> -->
                                        <th width="15%"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                error_reporting();
                        if(isset($_GET['public']))
                        {
                            mysql_query("UPDATE produk set public = '$_GET[public]' where id_produk = '$_GET[id_produk]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from produk where id_produk = '$_GET[del]'");
                            if($sql_del)
                            {
                                echo "<script>alert('Data Produk Berhasil dihapus'); 
                                location.href='index.php?pos=produk'</script>";exit;
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT p.id_produk,p.nama_produk,p.tgl_posting,p.harga,p.deskripsi,p.stok,
                            p.gambar,p.public,k.kat_nm from produk p INNER JOIN kategori_produk k on 
                            p.katpro_id = k.katpro_id order by p.id_produk desc ";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                                $gambar= $data[6];
                            ?>
                            
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[8]; ?></td>
                                <td><?php echo $data[2]; ?></td>
                                <td><?php echo $data[3]; ?></td>
                                <td><?php echo $data[4]; ?></td>
                               
                                <td><center><?php echo $data[5]; ?></center></td>
                                 <td><center>                                
                                <?php echo "<img src='images/$gambar' width='100' height='100'>"; ?>
                                </center></td>

                               
                                 
                                <td align="center">
                              
                                    <a class="btn btn-primary" href="index.php?pos=edit_produk&id_produk=<?php echo $data[0]; ?>">Edit</a>
                              
                                    <a class="btn btn-danger" href="index.php?pos=produk&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Hapus</a>
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