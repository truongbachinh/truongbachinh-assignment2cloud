<!DOCTYPE html>
<html>
<head>
	<title>ChinhTB toyStore</title>
	<meta http-equiv='content-type' content='charset=utf-8'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="web.css"> -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


	
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
     update the version number as needed -->
   
    <!-- initialize the SDK after all desired features are loaded 
    <script  src="/__/firebase/init.js"></script> 


   
	
	<title>Welcome to Firebase Hosting</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	
		
 -->
	
</head>
<body>
	<div class="container-fluid">
			<?php 
			ob_start();
			include('config.php');
			include('menu.php');	
						
			?>
	</div>	

	<div class="container-fluid">
		<?php 			
			include('content.php');
		?>
	</div>
	<div class="container-fluid">
			<?php include('footer.php'); ?>
	</div> 

</body>
</html>


