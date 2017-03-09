<?php 
$sql_be=mysql_fetch_array(mysql_query("SELECT * FROM user where iduser='$_GET[iduser]'"));

if (isset($_POST['edit_data_admin'])) 
{
    $sql_data= mysql_query("UPDATE user set nama='$_POST[nama]',email='$_POST[email]',username='$_POST[username]',
               password='$_POST[password]' where iduser='$_GET[iduser]'");

    if ($sql_data) 
    {
        echo "<script> alert(' Data berhasil diubah '); 
        location.href='index.php?pos=data_admin' </script>";exit;
      
    }
}

 ?>

<div id="wrapper">
<?php include 'menu.php' ?>

<div id="page-wrapper">
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
                                <input class="form-control" placeholder="Nama Pengguna" type="text" name="nama" 
                                value="<?php echo $sql_be[1]; ?>">
                            </div>

							<div class="form-group">
                            	<label>Email</label>
                                <input class="form-control" placeholder="Email" type="text" name="email"
                                value="<?php echo $sql_be[2]; ?>">
                            </div>

							<div class="form-group">
                            	<label>Username</label>
                                <input class="form-control" placeholder="Username" type="text" name="username"
                                value="<?php echo $sql_be [3]; ?>">
                            </div>

							<div class="form-group">
                            	<label>Password</label>
                                <input class="form-control" placeholder="Password" type="password" name="password"
                                value="<?php echo $sql_be[4]; ?>">
                            </div>
                                 
                            <center>                     
                            <button type="submit" class="btn btn-primary" name="edit_data_admin">Ubah</button>    
                            </center>

            </form>
    	</div>
		</div>
		</div>
	</div>
    </div>
    </div>