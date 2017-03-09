<?php 
    if (isset($_POST['admin'])) 
    {
        $kar1=strstr($_POST['email'], "@");
        $kar1=strstr($_POST['email'], ".");
        $password=$_POST['password'];

        $cek_username=mysql_num_rows(mysql_query("SELECT username FROM user WHERE username='$_POST[username]'"));

        $cek_email=mysql_num_rows(mysql_query("SELECT email FROM user WHERE email='$_POST[email]'"));
        if ($cek_email>0) 
        {
            echo "<script>window.alert('Email yang anda masukkan sudah digunakan')</script>";
            echo "<meta http-equiv='refresh' content='0'; url=index.php?pos=data_admin'>";
        }
        if ($cek_username>0) {
            echo "<script>window.alert('Username yang anda masukkan sudah digunakan')</script>";
            echo "<meta http-equiv='refresh' content='0'; url=index.php?pos=data_admin'>";   
        }
        elseif (empty($_POST['nama']) || empty($_POST['password']) || empty($_POST['username']) || empty($_POST['email'])) {
            echo "<script>window.alert('Data yang anda isikan belum lengkap')</script>";
            echo "<meta http-equiv='refresh' content='0'; url=index.php?pos=data_admin'>";   
        }
        elseif (!ereg("[a-z|A-Z]","$_POST[nama]")) {
            echo "<script>window.alert('Nama tidak boleh diisi dengan angka atu simbol')</script>";
            echo "<meta http-equiv='refresh' content='0'; url=index.php?pos=data_admin'>";
        }else{
            $sql_admin = mysql_query("INSERT into user(nama,email,username,password,type)
            values('$_POST[nama]','$_POST[email]','$_POST[username]','$_POST[password]','super')");

            if ($sql_admin) 
            {
                echo "<script>alert('Data Admin Berhasil diinputkan'); 
                location.href='index.php?pos=data_admin'</script>";exit;
            }
        }

    }

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
                                <input class="form-control" placeholder="Nama Pengguna" type="text" name="nama">
                            </div>

							<div class="form-group">
                            	<label>Email</label>
                                <input class="form-control" placeholder="Email" type="text" name="email">
                            </div>

							<div class="form-group">
                            	<label>Username</label>
                                <input class="form-control" placeholder="Username" type="text" name="username">
                            </div>

							<div class="form-group">
                            	<label>Password</label>
                                <input class="form-control" placeholder="Password" type="password" name="password">
                            </div>
                                 
                            <center>                     
                            <button type="submit" class="btn btn-primary" name="admin">Simpan</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            </center>

            </form>
    	</div>
		</div>
		</div>
	</div>

	<div class="row">
        <div class="col-lg-12">
        	
        	<div class="panel panel-primary">
    		<div class="panel-heading">
    		<h3 class="panel-title">Data Admin</h3>
    		</div>
    	<div class="panel-body">
    	<div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengguna</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                        if (isset($_GET['del'])) {
                                            $sql_hapus = mysql_query("DELETE FROM user where iduser='$_GET[del]'");
                                            if ($sql_hapus) {
                                                echo "<script>alert('Data Admin Berhasil dihapus'); 
                                                location.href='index.php?pos=data_admin'</script>";exit;
                                            }
                                        }

                                 ?>
                                 <?php 

                                 $batas=10;
                                 $no=1;
                                 if (empty($_GET['halaman'])) 
                                 {
                                     $posisi=0;
                                     $_GET['halaman']=1;

                                 } else {
                                $posisi=($_GET['halaman']-1)*$batas;
                                 }
                                 if (isset($_POST['cari'])) {
                                $cari=$_POST['cari'];
                                $sql="SELECT * FROM user where username like '%".$cari."%'";
                                 } else{
                                $sql="SELECT iduser,nama,username,password,email FROM user where type='super' order by iduser desc";
                                 }

                                 $a=mysql_query($sql);
                                 $no=1;
                                 if (mysql_num_rows($a)>0) {
                                     while ($b=mysql_fetch_array($a)) {
                                                                          

                                  ?>

                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $b['nama']; ?></td>
                                        <td><?php echo $b['email']; ?></td>
                                        <td><?php echo $b['username']; ?></td>
                                        <td><center>
                                        <a href="index.php?pos=edit_data_admin&iduser=<?php echo $b[0]; ?>">
                                        <button  class="btn btn-primary">Edit</button>
                                        </a>  
                                        <a href="index.php?pos=data_admin&del=<?php echo $b[0]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini ?')">
                                        <button  class="btn btn-danger">Hapus</button>
                                        </a></center>
                                        </td>
                                    </tr>
                                   
                                    
                                    <?php $no++;}} ?>
                                </tbody>
                            </table>
                        </div>
    	</div>
    	</div>
    	</div>
    	</div>
        </div>
    </div>
         
            </div>
 
        </div>
 
    </div>