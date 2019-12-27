<div style="padding-top: 10px; padding-bottom: 10px">
	<div class="row">
		
		<div class="col-md-3" >
		 <h1 style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 24px;">List Kind of Toys</h1>
			<div class="list-group">
				<a href="index.php?xem=search&idl=1" class="list-group-item list-group-item-action">Educational Toys</a>
				<a href="index.php?xem=search&idl=2" class="list-group-item list-group-item-action">Construction Toys</a>
				<a href="index.php?xem=search&idl=3" class="list-group-item list-group-item-action">Verhicle Toys</a>
				<a href="index.php?xem=search&idl=4" class="list-group-item list-group-item-action">Wooden Toys</a>
				<a href="index.php?xem=search&idl=5" class="list-group-item list-group-item-action">Sound Toys</a>
				<a href="index.php?xem=search&idl=6" class="list-group-item list-group-item-action">Teddy Bear</a>
				<a href="index.php?xem=search&idl=7" class="list-group-item list-group-item-action">Dolls</a>
				<a href="index.php?xem=search&idl=8" class="list-group-item list-group-item-action">Spinning Toys</a>
				<a href="index.php?xem=search&idl=9" class="list-group-item list-group-item-action">Hot Toys</a>
				<a href="index.php?xem=search&idl=10" class="list-group-item list-group-item-action">Best Sellers Toys</a>
			</div>
		</div>
		<div class="col-md-9">
			<?php
			session_start();

			$array=array();
			if (isset($_SESSION['array'])) {
				$array=$_SESSION['array'];
			}

			if(isset($_GET['xem'])){
				$t=$_GET['xem'];
			}else{
				$t='';
			}
			if(isset($_POST['searchButton']) || $t=='search'){
				include('search.php');
			}elseif(isset($_POST['loginWithGoogle'])){
				header('Location: header.php');
			}elseif($t=='ToyInfo'){
				include('ToyInfo.php');
			}elseif(isset($_POST['buy']) || isset($_POST['cart'])){
				if(isset($_POST['buy'])) {
					array_push($array, $_POST['buy']);
					$_SESSION['array']=$array;
				}
				include('Cart.php');
			}else{					
				include('Advertisement.php');
				include('AllToys.php');
			}

					

			if(isset($_POST['cancel'])) {
				session_destroy();
			}

			if (isset($_POST["login"])) {
				$username = $_POST["username"];
				$password = $_POST["password"];
				if ($username == "" || $password =="") {
					echo "<script type='text/javascript'>alert('Username hoặc Password bạn không được để trống!')</script>";
				} else {
					$sql = "select * from admin where username = '$username' and password = '$password'";
					$query = pg_query($conn,$sql);
					if (pg_num_rows($query)==0) {
						echo "<script type='text/javascript'>alert('username or password is incorrect.')</script>";
					} else {
						header('Location: admin.php');
					}
				}
			}

			?>
		</div>
		
	</div>
</div>