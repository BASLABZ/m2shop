<?php 
    session_start();
    include 'koneksi.php';
    if (isset($_GET['logout']))
    {   session_destroy();
        header('Location: index.php');
    
    }
    else{
        
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

  

    <?php 

    date_default_timezone_set("Asia/Bangkok");
    if (isset($_SESSION['iduser']) &&
        isset($_SESSION['username'])) {
       
        if (isset($_GET['pos'])) 
        {
            include ($_GET['pos'].'.php');
        }
        else
        {

            include 'kontentengah.php';
        }   
        }
        else
        {
            include 'login.php';
        }
     ?>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
