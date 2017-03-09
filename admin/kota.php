    <?php
    if(isset($_POST['kota']))
    {

    if (!ereg("[a-z|A-Z]","$_POST[nama_kota]")){
            echo "<script>window.alert('Nama tidak boleh diisi dengan angka atau simbol')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pos=kota'>";

    }
        /*$mdd= date("Y-m-d");*/
        else{
        $sql_kota = mysql_query("INSERT into kota (nama_kota,ongkos_kirim,publish)
        values('$_POST[nama_kota]','$_POST[ongkos_kirim]','yes')");
        if($sql_kota)
        {
        echo "<script> alert(' Data berhasil dimasukkan '); location.href='index.php?pos=kota' </script>";exit;
      
        }
    }
}
?>
    <div id="wrapper">

<?php include 'menu.php'; ?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h3 class="panel-title">Daftar Data Kota</h3>
            </div>
        <div class="panel-body">
            <form role="form" method="POST">
            <h4>Form Input Data Kota</h4>

                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label>Nama Kota</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Nama Kota" type="text" name="nama_kota">
                                </div>
                            </div><br><br>

                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label>Ongkos Kirim</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Ongkos Kirim" type="text" name="ongkos_kirim">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="kota">Simpan</button>                     
                            <button type="reset" class="btn btn-default">Reset</button>
                            </div>

            </form>
        </div>
        </div>
        </div>
    </div>
    </div>

            <div class="row">
        <div class="col-lg-12">
            
            <div class="panel panel-primary">
        <div class="panel-body">
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kota</th>
                                        <th>Ongkos Kirim</th>
                                        <th><center>Publish</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                        if(isset($_GET['publish']))
                        {
                            mysql_query("UPDATE kota set publish = '$_GET[publish]' where kota_id = '$_GET[kota_id]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from kota where kota_id = '$_GET[del]'");
                            if($sql_del)
                            {
                                echo"<script>alert('Data Kota Berhasil dihapus');
                                location.href='index.php?pos=kota'</script>";exit;
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT * from kota ORDER BY kota_id DESC";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[2]; ?></td>
                                <td align="center">
                                <?php
                                    if($data[3] == 'yes')
                                    {
                                ?>
                                    <a class="btn btn-primary" href="index.php?pos=kota&publish=no&kota_id=<?php echo $data[0]; ?>">On</a>
                                <?php   }
                                else    {   ?>
                                    <a class="btn btn-danger" href="index.php?pos=kota&publish=yes&kota_id=<?php echo $data[0]; ?>">Off</a>
                                <?php   }   ?>
                                </td>
                                <td align="center">
                              
                                    <a class="btn btn-primary" href="index.php?pos=edit_kota&kota_id=<?php echo $data[0]; ?>">Edit</a>
                              
                                    <a class="btn btn-danger" href="index.php?pos=kota&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Hapus</a>
                                </td>
                               
                            </tr>
                        <?php $no++; } ?>

                   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    </div>
                    </div>
                    </div>
                    