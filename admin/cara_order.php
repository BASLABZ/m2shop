<?php
    if(isset($_POST['cara_order']))
    {
        if (!ereg("[a-z|A-Z]","$_POST[judul]")){
    echo "<script>window.alert('Judul Order tidak boleh diisi dengan angka atau simbol')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?pos=cara_order'>";

    }
        /*$mdd= date("Y-m-d");*/
        else{
        $sql_cara = mysql_query("INSERT into caraorder (judul,deskripsi,publish)
        values('$_POST[judul]','$_POST[deskripsi]','yes')");
        
        if($sql_cara)
        {
            echo "<script> alert(' Data berhasil dimasukkan '); location.href='index.php?pos=cara_order' </script>";exit;
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
    		<h3 class="panel-title">Data Cara Order</h3>
    		</div>
    	<div class="panel-body">
        	<form role="form" method="POST">
        	<h4>Form Input Data Cara Order</h4>

        					<div class="form-group">
                            	<div class="col-lg-4" align="right">
                            	<label>Judul</label>
                            	</div>
                            	<div class="col-lg-6" align="left">                            	
                                <input class="form-control" placeholder="Judul Cara Order" type="text" name="judul">
                            	</div>
                            </div><br><br>
                            <div class="form-group">
                            	<div class="col-lg-4" align="right">
                            	<label>Deskripsi</label>
                            	</div>
                            	<div class="col-lg-6" align="left">                            	
                                <textarea class="form-control" rows="6" placeholder="Deskripsi Cara Order" type="text" name="deskripsi">
        						</textarea>
                                </div>
                            </div>  
                             <div></div> <br><br>                        
                            <div class="form-group">
                            <div class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="cara_order">Simpan</button>                     
                            <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                            </div>

            </form>
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
                                        <th width="20%">Judul</th>
                                        <th width="40%">Deskripsi</th>
                                        <th><center>Publish</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                        if(isset($_GET['publish']))
                        {
                            mysql_query("UPDATE caraorder set publish = '$_GET[publish]' where idcara = '$_GET[idcara]'");
                        }
                        elseif(isset($_GET['del']))
                        {
                            $sql_del = mysql_query("DELETE from caraorder where idcara = '$_GET[del]'");
                            if($sql_del)
                            {
                                echo "<script>alert('Data Cara Order Berhasil dihapus'); 
                                location.href='index.php?pos=cara_order'</script>";exit;
                            }
                        }
                        
                            $no = 1;
                            $sql = "SELECT * from caraorder ORDER BY idcara DESC";
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
                                    <a class="btn btn-primary" href="index.php?pos=cara_order&publish=no&idcara=<?php echo $data[0]; ?>">On</a>
                                <?php   }
                                else    {   ?>
                                    <a class="btn btn-danger" href="index.php?pos=cara_order&publish=yes&idcara=<?php echo $data[0]; ?>">Off</a>
                                <?php   }   ?>
                                </td>
                                <td align="center">
                              
                                    <a class="btn btn-primary" href="index.php?pos=edit_cara_order&idcara=<?php echo $data[0]; ?>">Edit</a>
                              
                                    <a class="btn btn-danger" href="index.php?pos=cara_order&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakin ?')">Hapus</a>
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

