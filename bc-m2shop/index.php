<?php 
	session_start();
	include('../admin/koneksi.php');
	if (isset($_GET['logout'])) 
	{
		session_destroy();
		header('Location: index.php');
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Mua-mua Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Biruang Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default',        
			            width: 'auto', 
			            fit: true 
		        });
			    });
			   </script>
			   <link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>	
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<style type="text/css">
		h2{
			font-family: Freestyle script;
			color: white;
			font-size: 50px;
		}
		</style>
</head>
<body>
	<!-- header -->
	<?php include 'menuatas.php'; ?>
	
	<div></div><br><br>
	
	<?php 
		if (isset($_GET['p'])) 
		{
			if ($_GET['p'] == 'checkout') 
			{
				if (isset($_SESSION['id_kustomer']) &&
					isset($_SESSION['username'])) 
				{
					include ($_GET['p'].'.php');
				}
				else
				{
					include ('konten.php');
				}
			}
			else
			{
				include ($_GET['p'].'.php');
			}
		}
		
		else
		{
			include ('konten.php');
		}
	 ?>

	<div class="sign-up">
		<!-- container -->
		<div class="container">
				<h2 align="center">Mua-mua Shop, Best of Indonesian Style</h2>
		</div>
		<!-- //container -->
	</div>
	<!-- //sign-up -->
	<!-- footer -->
	<?php include 'footer.php'; ?>
	<!-- //footer -->
</body>
</html>