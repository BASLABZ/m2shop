<?php 
		include 'admin/koneksi.php';
		session_start();
		 if (isset($_GET['logout'])) {
         session_destroy();
         echo "<script> alert('Anda Berhasil Keluar Aplikasi'); location.href='index.php' </script>";exit;
        }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | M2SHOP</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bas-css.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <link rel="stylesheet" href="assets/plugin-bas/css/xzoom.css">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" />
    <link rel="stylesheet" href="assets/plugin-bas/css/demo.css" />
     <link type="text/css" rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css" />
  <link type="text/css" rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 


    

	
</head><!--/head-->

<body>
	<?php include 'menuatas.php'; ?>
	
	<?php 
		if (isset($_GET['page'])) 
		{
			if ($_GET['page'] == 'checkout') 
			{
				if (isset($_SESSION['id_kustomer']) &&
					isset($_SESSION['username'])) 
				{
					include ($_GET['page'].'.php');
				}
				else
				{
					include 'slider.php';
					include ('kontentengah.php');
				}
			}
			else
			{
				include ($_GET['page'].'.php');
			}
		}
		
		else
		{
			include 'slider.php';
			include ('kontentengah.php');
		}
	 ?>
	
	
	<?php include 'footer.php'; ?>

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="assets/plugin-bas/source/js/xzoom.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	  <script type="text/javascript" src="assets/plugin-bas/hammer.js/1.0.5/jquery.hammer.min.js"></script>  
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.js"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>  
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js"></script>
    <script src="assets/plugin-bas/js/setup.js"></script>
    <script type="text/javascript">

    	$('.select2').select2();
    </script>

  
</body>
</html>
<script type="text/javascript">
	// re-password
	   function checkPass()
		{

		    var password1 = document.getElementById('password1');
		    var password2 = document.getElementById('password2');
		    var message = document.getElementById('confirmMessage');
		    var goodColor = "#66cc66";
		    var badColor = "#ff6666";
		    if(password1.value == password2.value){
		        password2.style.backgroundColor = goodColor;
		        message.style.color = goodColor;
		        message.innerHTML = "Passwords Match!"
		    }else{
		        password2.style.backgroundColor = badColor;
		        message.style.color = badColor;
		        message.innerHTML = "Passwords Do Not Match!"
		    }
		} 
		  
</script>