<div class="progress" style=" height: 55px">
	<div class="progress-bar bg-success row" style="width: 120%;">
		<h2>&nbsp;&nbsp;ATN Company&nbsp;</h2>
		<form class="form-inline" action="index.php" method="post" enctype="multipart/form-data">
			<input type="text" class="form-control" name="searchText" value="<?php if(isset($_POST['searchText'])) echo $_POST['searchText'] ?>" style="width: 750px">
			<button border-style:solid; border-width:1px; border-color:red; type="submit" class="btn btn-success" name="searchButton">Search Toy</button>
			<button type="submit" class="btn btn-success" name="cart">Your Cart</button>
			<button type="submit" class="btn btn-success" name="cart">Login with Google</button>&nbsp;
		</form>
	</div>
</div>