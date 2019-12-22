<div style="padding-top: 10px; padding-bottom: 10px">
	<div class="row">
		
		<div class="col-md-3" >
			<div class="list-group">
				<a href="index.php?xem=search&idl=1" class="list-group-item list-group-item-action">Book of Foreign Affairs</a>
				<a href="index.php?xem=search&idl=2" class="list-group-item list-group-item-action">Economic Book</a>
				<a href="index.php?xem=search&idl=3" class="list-group-item list-group-item-action">Literature Books In The Country</a>
				<a href="index.php?xem=search&idl=4" class="list-group-item list-group-item-action">Foreign Literature Books</a>
				<a href="index.php?xem=search&idl=5" class="list-group-item list-group-item-action">Books Of Social Life</a>
				<a href="index.php?xem=search&idl=6" class="list-group-item list-group-item-action">Children's Books</a>
				<a href="index.php?xem=search&idl=7" class="list-group-item list-group-item-action">Self Development Book</a>
				<a href="index.php?xem=search&idl=8" class="list-group-item list-group-item-action">Computer Books - Foreign Languages</a>
				<a href="index.php?xem=search&idl=9" class="list-group-item list-group-item-action">Specialized Book</a>
				<a href="index.php?xem=search&idl=10" class="list-group-item list-group-item-action">Textbook</a>
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
			}elseif($t=='BookInfo'){
				include('BookInfo.php');
			}elseif(isset($_POST['buy']) || isset($_POST['cart'])){
				if(isset($_POST['buy'])) {
					array_push($array, $_POST['buy']);
					$_SESSION['array']=$array;
				}
				include('Cart.php');
			}else{					
				include('Advertisement.php');
				include('AllBooks.php');
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
					$query = mysqli_query($conn,$sql);
					if (mysqli_num_rows($query)==0) {
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