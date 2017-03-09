<div id="wrapper">

<?php include 'menu.php'; ?>

    <div id="page-wrapper">

            <div class="row">
        <div class="col-lg-12">
            <h2>Daftar Data Profil</h2>
            <a href="index.php?pos=tambah_profil" class="btn btn-primary">Tambah Data</a><br><br>
            <div class="panel panel-primary">
        <div class="panel-body">
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Profil</th>
                                        <th>Deskripsi Profil</th>
                                        <th><center>Gambar</center></th>
                                        <th><center>Publish</center></th>                                        
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                        if(isset($_GET['publish']))
                        {
                            mysql_query("UPDATE profil set publish = '$_GET[publish]' where profil_id = '$_GET[profil_id]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from profil where profil_id = '$_GET[del]'");
                            if($sql_del)
                            {
                                echo "<script>alert('Data Profil Berhasil dihapus'); 
                                location.href='index.php?pos=profil'</script>";exit;
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT * from profil ORDER BY profil_id DESC";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                                $gambar= $data[3];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[2]; ?></td>
                                <td>
                                
                                <center><?php echo "<img src='images/$gambar' width='150' height='150'>"; ?></center>
                                </td>
                                <td align="center">
                                <?php
                                    if($data[4] == 'yes')
                                    {
                                ?>
                                <a class="btn btn-primary" href="index.php?pos=profil&publish=no&profil_id=<?php echo $data[0]; ?>">On</a>
                                <?php   }
                                else    {   ?>
                                    <a class="btn btn-danger" href="index.php?pos=profil&publish=yes&profil_id=<?php echo $data[0]; ?>">Off</a>
                                <?php   }   ?>
                                </td>
                                <td align="center">
                              
                                    <a class="btn btn-primary" href="index.php?pos=edit_profil&profil_id=<?php echo $data[0]; ?>">Edit</a>
                              
                                    <a class="btn btn-danger" href="index.php?pos=profil&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Hapus</a>
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