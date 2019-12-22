<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="./CSSCloud.css">
</head>
<body  style="background-color: #C1CDC1">
<style>
		.header{
			background-color: #D0CFCF;
			font-family: sans-serif;
			z-index:1;
			background-color: rgba(0, 225, 0, 0.4);
		}
		.header ul{
			padding: 0;
			margin: 0;
			list-style-type: none;
			z-index:-1;
		}
		.header a{
			padding: 0 10px;
			color: #FFFEFE;
			font-size: 20px;
			line-height: 50px;
			text-decoration: none;
			display: inline-block;
			margin-left: 60px;
		}
		.header li{
			display: inline-block;
		}
		.header a:hover{
			background-color: #0D7905;
			color: #050505;

		}
		.search-box{
			display: inline-flex;
			width: 400px;
			height: 25px;
			margin-left: 300px;
			margin-top: 10px;
		}
		.search-box{
			display: inline-flex;
			width: 400px;
			height: 25px;
			margin-left: 300px;
			margin-top: 10px;
		}		
 </style>
<table cellspacing="0" cellpadding="0" width=100% height=auto>
<tr>
	<td><img src="./cloud2.jpg" style="width: 100px; height: 100px;" style = "display: inline;" /></td>
	<td><input type="text"  placeholder="Search..." name="search" class="search-box"></td>
	<td><b><a href="LoginCloud.php">LOGIN</a></b></td>
	<td><img src="https://img.icons8.com/ios-glyphs/30/000000/add-shopping-cart.png"></td>
</tr>
</table>

<table cellspacing="10" cellpadding="0" width=100% height=auto>
		<tr>
			<td><div class="header">
			<ul>
				
				<li><b><a href="HomeCloud.php">HOME</a></b></li>
				
				<li><b><a href="AllProduct.php">SHOP</a></b></li>
				
			</ul>
			</div>
			</td>
		</tr>
</table>
	<div class="third">
		 <form method="POST" action="login.php" >
        <table style="margin-left: 37%;" height="300" >
        	<tr>
				<td align="center" colspan="2"><h1>LOGIN</h1></td>

			</tr>
            <tr>
		<td width="150"><b>Username:</b></td>
		<td width="250"><input type="name" name="username"><br></td>
	</tr>
	<tr>
		<td width="150"><b>Password:</b></td>
		<td width="250"><input type="password" name="password"><br></td>
	</tr>
	<tr>
    	<td align="center" colspan="2"><b><input type ="submit" value="Log In"></b>

		</td>
	</tr>
        </table>
    </form>
</div>
<?php
$connection = pg_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . pgli_error($connection));
}
$select_db = pg_select_db($connection, 'Mycomputing');
if (!$select_db){
    die("Database Selection Failed" . pgli_error($connection));
}

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `account` WHERE username='$username' and password='$password'";
 
$result = pg_query($connection, $query) or die(pgli_error($connection));
$count = pg_num_rows($result);
if ($count == 1){
//echo "login successfull will move to admin page with function are add and delete
echo '<script>window.location="AdminCloud.php"</script>';

}
else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
</body>
</html>