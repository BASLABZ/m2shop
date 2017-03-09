<div id="wrapper">

<?php include 'menu.php'; ?>

	<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
    	<div class="panel panel-primary">
    		<div class="panel-heading">
    		<h3 class="panel-title">Tambah Data Profil</h3>
    		</div>
    	<div class="panel-body">
        	<form role="form" onsubmit="return validasi()" method="POST" action="?pos=proses_tambah_profil" enctype="multipart/form-data">
        	
                            <div class="form-group">
                            	<div class="col-lg-4" align="right">
                            	<label class="control-label" for="focusedInput">Judul Profil</label>
                            	</div>
                            	<div class="col-lg-6" align="left">                            	
                                <input class="form-control" placeholder="Judul Profil" type="text" 
                                        id="focusedInput" name="profil_nm" >
                            	</div><br><br>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Deskripsi Profil</label>
                                </div>
                                <div class="col-lg-6" align="left">                             
                                <textarea name="profil_des"></textarea>
                                </div><br><br><br> 
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4" align="right">
                                <label class="control-label" for="focusedInput">Upload Gambar</label>
                                </div>
                                <div class="col-lg-6" align="left">          
                                <input type="file" name="gambar">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-action" class="col-lg-6" align="center">
                            <button type="submit" class="btn btn-primary" 
                                    id="name">Tambah</button>                     
                            </div>

            </form>
    	</div>
		</div>
		</div>
	</div>

	</div>
</div>