<?php 
    $profil_id=$_GET["profil_id"];
    $result=mysql_query("SELECT * FROM profil WHERE profil_id = $profil_id");
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
            <h3 class="panel-title">Edit Data Profil</h3>
            </div>
        <div class="panel-body">
            <form role="form" method="POST" action="?pos=proses_edit_profil" enctype="multipart/form-data">
            
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Judul Profil</label>
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-6" align="left">                             
                                <input class="form-control" placeholder="Judul Profil" type="text" 
                                        id="focusedInput" name="profil_nm" value="<?php echo $sql_be[1]; ?>">
                                </div>
                                <div class="col-lg-6" align="left">                                
                                <input class="form-control" placeholder="Judul Profil" type="hidden" 
                                        id="focusedInput" name="profil_id" value="<?php echo $sql_be[0]; ?>">
                                </div><br><br>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Isi</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <textarea name="profil_des"><?php echo $sql_be[2]; ?></textarea>
                                </div><br><br><br>                             
                            </div>
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
                            <button type="submit" class="btn btn-primary" name="edit_profil" 
                                    id="name">Ubah</button>                     
                            </div>

            </form>
        </div>
        </div>
        </div>
    </div>

    </div>
</div>