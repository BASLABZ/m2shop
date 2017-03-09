<?php 
    $id_produk=$_GET["id_produk"];
    $result=mysql_query("SELECT * FROM produk WHERE id_produk = $id_produk");
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
    		<h3 class="panel-title">Edit Data Produk</h3>
    		</div>
    	<div class="panel-body">
        	<form role="form" method="POST" action="?pos=proses_edit_produk" enctype="multipart/form-data">
        	
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Nama Produk</label>
                                </div>
                                
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Nama Produk" type="text" 
                                        id="focusedInput" autofocus required name="nama_produk" value="
                                        <?php echo $sql_be[2]; ?>">
                                </div>
                                <div class="col-lg-6" align="left">
                                <input class="form-control" placeholder="Nama Produk" type="hidden"
                                        id="focusedInput" hidden name="id_produk" value="<?php echo $sql_be[0]; ?>">
                                </div>
                                <br><br>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="textarea">Isi</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <textarea name="deskripsi"><?php echo $sql_be[5]; ?></textarea>
                                </div><br><br><br> 
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Harga Produk</label>
                                </div>                                
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Harga Produk" 
                                autofocus required onkeyup="javascript:tandaPemisahTitik(this);" 
                                type="text" id="focusedInput"  name="harga" value="<?php echo $sql_be[4]; ?>" >
                                </div><br><br>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Stok Produk</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Stok Produk" type="number" 
                                        id="name" autofocus required name="stok" value="<?php echo $sql_be[7]; ?>" >
                                </div><br><br>
                            </div>
                            <div class="control-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label">Status Produk</label>
                                </div>
                                <div class="col-lg-6" align="left">
                                <div class="controls">
                                <select name="status">
                                    <option value="null"> Pilih Status </option>
                                    <option value="new"> Produk Baru </option>
                                    <option value="old">Produk Lama</option>
                                    <option value="<?php echo $sql_be[8]; ?>"></option> 
                                </select>
                                </div>
                                </div>
                            </div><br><br>
                            <div class="control-group success">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" >Kategori Produk  </label>
                                </div>
                                <div class="controls">
                                <div class="col-lg-6" align="left">
                                <select name="katpro_id" >
                                <option value="null">Pilih Kategori</option>
                                <?php  
                                //include("../config/config.php");
                                $result= mysql_query ("SELECT * FROM kategori_produk ");
                                while ($d = mysql_fetch_array ($result)){ 
                                ?>
                                <option value="<?php echo $d[0]; ?>"><?php echo $d ['kat_nm']; ?> </option>
                                <?php
                                }
                                ?>                                       
                                </select>
                                </div>
                                </div>                                
                            </div><br><br>
                            <div class="fprm-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Upload Gambar</label>
                                </div>
                                <div class="col-lg-6" align="left">          
                                <input class="input-file uniform_on" type="file" name="gambar"
                                        id="file" autofocus required>
                                <?php echo "<img src='images/$gambar' width='100' height='100'"; ?>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-action" class="col-lg-12" align="center">
                            <button type="submit" class="btn btn-primary" name="edit_produk" id="name">Ubah</button>     
                            </div>

            </form>
    	</div>
		</div>
		</div>
	</div>

	</div>
</div>