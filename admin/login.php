<?php 
if (isset($_POST['login'])) 
    
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $no = 0;
  $sql = "SELECT * from user where username = '$username' and password = '$password' and type = 'super'";
  $result = mysql_query($sql);
  while ($log=mysql_fetch_array($result))
    {
      $id_user = $log['iduser'];
      $username = $log['username'];
      $password = $log['password'];
      $no++;
    }
    if ($no>0) 
    {
        $_SESSION['iduser'] = $id_user;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "<script> alert('Login Sukses'); location.href='index.php'</script>";exit;
    }
    else
    {
        echo "<script> alert('Login gagal'); location.href='index.php'</script>";exit;
    
       // header('location: index.php?pos=login&wrong=1');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mua-mua Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title">
                        <center>
                        <img src="gambar/logo.jpg">
                        </center>  
                        </h3>
                        </div>
                            
                        <div class="panel-body">
                                 
                            <form role="form" method="POST">

                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" name="password">
                            </div>
                                 
                            <center>                     
                            <button type="submit" class="btn btn-lg btn-primary" name="login">Sign in</button>
                            <button type="reset" class="btn btn-lg btn-primary">Reset</button>
                            </center>

                            </form>
                        </div>
                    </div>
                    

                    </div>
                    <div class="col-lg-4"></div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
