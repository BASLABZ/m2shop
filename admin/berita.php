<div id="wrapper">

<?php include 'menu.php'; ?>

    <div id="page-wrapper">

            <div class="row">
        <div class="col-lg-12">
            <h2>Daftar Data Berita</h2>
            <a href="index.php?pos=tambah_berita" class="btn btn-primary">Tambah Data</a><br><br>
            <div class="panel panel-primary">
        <div class="panel-body">
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Posting</th>
                                        <th width="20%">Isi</th>
                                        <th><center>Kategori</center></th>
                                        <th><center>Gambar</center></th>
                                        <th><center>Publish</center></th>                                        
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                error_reporting();
                        if(isset($_GET['publish']))
                        {
                            mysql_query("UPDATE berita set publish = '$_GET[publish]' where berita_id = '$_GET[berita_id]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from berita where berita_id = '$_GET[del]'");
                            if($sql_del)
                            {
                                echo "<script>alert('Data Berita Berhasil dihapus'); 
                                location.href='index.php?pos=berita'</script>";exit;
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT b.berita_id,b.berita_judul,b.mdd,b.berita_des,b.gambar,b.publish,k.kat_nm 
                                    from berita b INNER JOIN kategori k on b.kat_id = k.kat_id order by b.berita_id desc" ;
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                                $gambar= $data[4];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[2]; ?></td>
                                <td><?php echo $data[3]; ?></td>
                                <td><center><?php echo $data[6]; ?></center></td>
                                <td><center>                                
                                <?php echo "<img src='images/$gambar' width='150' height='150'>"; ?>
                                </center></td>
                                <td align="center">
                                <?php
                                    if($data[5] == 'yes')
                                    {
                                ?>
                                    <a class="btn btn-primary" href="index.php?pos=berita&publish=no&berita_id=<?php echo $data[0]; ?>">On</a>
                                <?php   }
                                else    {   ?>
                                    <a class="btn btn-danger" href="index.php?pos=berita&publish=yes&berita_id=<?php echo $data[0]; ?>">Off</a>
                                <?php   }   ?>
                                </td>
                                <td align="center">
                              
                                    <a class="btn btn-primary" href="index.php?pos=edit_berita&berita_id=<?php echo $data[0]; ?>">Edit</a>
                              
                                    <a class="btn btn-danger" href="index.php?pos=berita&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a>
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
<!-- 
update kustomer set id_kota='' where id_kustomer=''
insert into kustomer (nama fild) values ('isi fild') --><!-- 
select * from kustomer where
SELECT p.id_produk,k.kat_nm,p.nama_produk,p.tgl_posting,
p.harga,p.deskripsi,p.gambar,p.stok,p.status,p.public FROM produk p 
INNER JOIN kategori_produk k ON p.katpro_id=k.katpro_id WHERE kat_nm='Tas'  -->