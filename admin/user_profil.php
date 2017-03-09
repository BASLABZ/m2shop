<?php 
if(isset($_SESSION['iduser']))
{
$query = mysql_query("SELECT * FROM user WHERE iduser=$_SESSION[iduser]");
$d = mysql_fetch_array($query);
?>




<div id="wrapper">

       
    <?php include 'menu.php'; ?>

    <div id="page-wrapper">

    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
    	<div class="panel panel-primary">
    		<div class="panel-heading">
    		<h3 class="panel-title">User Profil Admin</h3>
    		</div>
    	<div class="panel-body">
        	<form role="form" method="POST">
        	<h2>Form Profil Admin</h2>

                            <div class="form-group">
                            	<label>Nama Pengguna</label>
                                <input class="form-control" placeholder="Nama Pengguna" type="text" value="<?php echo $d['nama']; ?>">
                            </div>

							<div class="form-group">
                            	<label>Email</label>
                                <input class="form-control" placeholder="Email" type="text" value="<?php echo $d['email']; ?>">
                            </div>

							<div class="form-group">
                            	<label>Username</label>
                                <input class="form-control" placeholder="Username" type="text" value="<?php echo $d['username']; ?>">
                            </div>

							<div class="form-group">
                            	<label>Password</label>
                                <input class="form-control" placeholder="Password" type="password" value="<?php echo $d['password']; ?>">
                            </div>
                                 
                            <center>                     
                            <button type="submit" class="btn btn-lg btn-primary" name="login">Simpan Profil</button>
                            </center>

                            </form>
    	</div>
		</div>
		</div>
	</div>

 	</div>
 
    </div>


</div>

<?php } ?>