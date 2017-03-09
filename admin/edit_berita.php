<?php 
    $berita_id=$_GET["berita_id"];
    $result=mysql_query("SELECT * FROM berita WHERE berita_id = $berita_id");
    $sql_be=mysql_fetch_array($result);
    $gambar=$sql_be['gambar'];
 ?>

<div id="wrapper">

<?php include 'menu.php'; ?>

	<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
    	<div class="panel panel-primary">
    		<div class="panel-heading">
    		<h3 class="panel-title">Edit Data Berita</h3>
    		</div>
    	<div class="panel-body">
        	<form role="form" method="POST" action="?pos=proses_edit_berita" enctype="multipart/form-data">
        	
                            <div class="form-group">
                            	<div class="col-lg-4" align="right">
                            	<label class="control-label" for="focusedInput">Judul Berita</label>
                            	</div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Judul Berita" type="text" 
                                        id="focusedInput" name="berita_judul" value="<?php echo $sql_be[1]; ?>">
                                </div>
                            	<div class="col-lg-6" align="left">                                
                                <input class="form-control" placeholder="Judul Berita" type="hidden" 
                                        id="focusedInput" hidden name="berita_id" value="<?php echo $sql_be[0]; ?>">
                                </div><br><br>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Isi</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <textarea name="berita_des"><?php echo $sql_be[3]; ?></textarea>
                                </div><br><br><br> 
                             </div>
                            <div class="control-group success">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" >Kategori Berita  </label>
                                </div>
                                <div class="controls">
                                <div class="col-lg-6" align="left">
                                <select name="kat_id" >
                                <option value="null">Pilih Kategori</option>
                                <?php  
                                //include("../config/config.php");
                                $result= mysql_query ("SELECT * FROM kategori ");
                                while ($d = mysql_fetch_array ($result)){ 
                                ?>
                                <option value="<?php echo $d[0]; ?>"><?php echo $d['kat_nm']; ?> </option>
                                <?php
                                }
                                ?>                                       
                                </select>
                                </div>
                                </div>                                
                            </div><br><br>
                           
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Upload Gambar</label>
                                </div>
                                <div class="col-lg-6" align="left">
                                <input type="file" name="gambar">
                                <?php echo "<img src='images/$gambar' width='100' height='100'"; ?>          
                                
                                </div>
                            </div><br><br><br><br>
                            <br><br><br>
                            <div class="form-action" class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="edit_berita" 
                                    id="name">Ubah</button>                     
                            </div>

            </form>
    	</div>
		</div>
		</div>
	</div>

	</div>
</div>