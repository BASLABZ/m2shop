    <?php
    if(isset($_POST['kategori_produk']))
    {

    if (!ereg("[a-z|A-Z]","$_POST[kat_nm]")){
            echo "<script>window.alert('Nama Kategori tidak boleh diisi dengan angka atau simbol')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?pos=kategori_produk'>";

    }
        /*$mdd= date("Y-m-d");*/
        else{
        $sql_album = mysql_query("INSERT into kategori_produk (kat_nm,publish)
        values('$_POST[kat_nm]','yes')");

        if($sql_album)
        {

            echo "<script> alert(' Data berhasil dimasukkan '); 
            location.href='index.php?pos=kategori_produk' </script>";exit;
      
        }
    }}
?>
    <div id="wrapper">

<?php include 'menu.php'; ?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h3 class="panel-title">Daftar Kategori Produk</h3>
            </div>
        <div class="panel-body">
            <form role="form" method="POST">
            <h4>Form Kategori Produk</h4>

                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Nama Kategori</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Nama Kategori Produk" type="text" id="focusedInput" name="kat_nm">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="kategori_produk">Simpan</button>                     
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
                                        <th>Nama Kategori</th>
                                        <th><center>Publish</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                        if(isset($_GET['publish']))
                        {
                            mysql_query("UPDATE kategori_produk set publish = '$_GET[publish]' where katpro_id = '$_GET[katpro_id]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from kategori_produk where katpro_id = '$_GET[del]'");
                            if($sql_del)
                            {
                                echo "<script>alert('Data Berita Berhasil dihapus');
                                location.href='index.php?pos=kategori_produk'</script>";exit;
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT * from kategori_produk ORDER BY katpro_id DESC";
                            $hasil = mysql_query($sql);
                            while ($data = mysql_fetch_row($hasil)){
                        ?>                                                                                   
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data[1]; ?></td>
                                <td align="center">
                                <?php
                                    if($data[2] == 'yes')
                                    {
                                ?>
                                    <a class="btn btn-primary" href="index.php?pos=kategori_produk&publish=no&katpro_id=<?php echo $data[0]; ?>">On</a>
                                <?php   }
                                else    {   ?>
                                    <a class="btn btn-danger" href="index.php?pos=kategori_produk&publish=yes&katpro_id=<?php echo $data[0]; ?>">Off</a>
                                <?php   }   ?>
                                </td>
                                <td align="center">
                              
                                    <a class="btn btn-primary" href="index.php?pos=edit_kategori_produk&katpro_id=<?php echo $data[0]; ?>">Edit</a>
                              
                                    <a class="btn btn-danger" href="index.php?pos=kategori_produk&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a>
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
                    