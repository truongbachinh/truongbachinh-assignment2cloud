	<?php
include('config.php');

$errmess="";
$where="";
$id = $id_kind = $name = $price = $brand = $made = $description = $image = $rb = $c = $cmd = "";
if(isset($_POST['id'])) {
	$id = $_POST['id'];
}
if(isset($_POST['id_kind'])) {
	$id_kind = $_POST['id_kind'];
}
if(isset($_POST['name'])) {
	$name = $_POST['name'];
}
if(isset($_POST['price'])) {
	$price = $_POST['price'];
}
if(isset($_POST['brand'])) {
	$brand = $_POST['brand'];
}
if(isset($_POST['made'])) {
	$made = $_POST['made'];
}
if(isset($_POST['description'])) {
	$description = $_POST['description'];
}
if(isset($_POST['image'])) {
	$image = $_POST['image'];
}
if(isset($_POST['rb'])) {
	$rb = $_POST['rb'];
}
if(isset($_POST['c'])) {
	$c = $_POST['c'];
}
if(isset($_POST['cmd'])) {
	$cmd = $_POST['cmd'];
}
switch ($cmd) {
	case 'Add':
	if (!is_numeric($id)) {
		$errmess = 'ID invalid';
		break;
	} else {
		if ($rb)
			update_toy ();
		else
			add_toy ();
		$rb = $id = $id_kind = $name = $price = $brand = $made = $description = $image = ''; 
		break;
	}
	case 'Delete':
	if (is_array ($c)) {
		foreach ($c as $key => $val) 
			pg_query($conn, "delete from toy where id='$key'");
	} else
	$errmess = 'At least 1 line must be marked';
	break;
	case 'Search':
	$where = " where id like '%$id%' and id_kindtoy like '%$id_kind%' and toyname like '%$name%' and brand like '%$brand%' and made like '%$made%' and toydescription like '%$description%' and img like '%$image%'";
	break;
	default:
	if ($rb!='' && $id!=$rb) {
		$kq = pg_query($conn, "select * from toy where id='$rb'");
		$r = pg_fetch_assoc($kq);
		$id = $r['id'];
		$id_kind = $r['id_kindtoy'];
		$name = $r['toyname'];
		$price = $r['price'];
		$brand = $r['brand'];
		$made = $r['made'];
		$description = $r['toydescription'];
		$image = $r['img'];
	} else
	$rb = $id = $id_kind = $name = $price = $brand = $made = $description = $image = ''; 
	break;
}
?>

<html>
<head>
	<title>ADMIN</title>
	<meta http-equiv="content-type" content="charset=utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="web.css"> -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="text-align: center;">
	<form name='toy' method='post' action='admin.php'>
		<a href="index.php" style="float: right;">Logout</a>
		<h1>UPDATE TOY</h1><hr />'
		<div style="padding: 50px">
			<table class="table table-borderless">
				<tr>
					<td width='15%'>ID:</td>
					<td width='85%'><input type='text' class="form-control" name='id' value='<?php echo $id ?>'></td>
				</tr>
				<tr>
					<td>ID_Kind:</td>
					<td><input type='text' class="form-control" name='id_kind' value='<?php echo $id_kind ?>'></td>
				</tr>
				<tr>
					<td>Toy Title:</td>
					<td><input type='text' class="form-control" name='name' value='<?php echo $name ?>'></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type='text' class="form-control" name='price' value='<?php echo $price ?>'></td>
				</tr>
				<tr>
					<td>Brand:</td>
					<td><input type='text' class="form-control" name='brand' value='<?php echo $brand ?>'></td>
				</tr>
				<tr>
					<td>Made:</td>
					<td><input type='text' class="form-control" name='made' value='<?php echo $made ?>'></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type='text' class="form-control" name='description' value='<?php echo $description ?>'></td>
				</tr>
				<tr>
					<td>Image:</td>
					<td><input type='text' class="form-control" name='image' value='<?php echo $image ?>'></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" class="btn btn-success" name="cmd" value="Add" /> 
						<input type="submit" class="btn btn-success" name="cmd" value="Delete" /> 
						<input type="submit" class="btn btn-success" name="cmd" value="Search" />
					</tr>
					<tr>
						<td colspan='2' align='center'><?php echo $errmess ?></td>
					</tr>
				</table>

				<table  class="table table-bordered">
					<thead>
						<tr align="center">
							<td width="12%">STT</td>
							<td width="7%"> Delete</td>
							<td width="7%">Update</td>
							<td width="14%">ID</td>
							<td width="60%">Toy Title</td>
						</tr>
					</thead>
					<tbody>
					<?php
					$ci = 1;
					$kq = pg_query($conn, "select * from toy $where");
					while ($r = pg_fetch_assoc($kq)) {
						echo "<tr align='center'><td>$ci</td>";
						echo "<td><input type='checkbox' name='c[{$r['id']}]' value='1' /></td>";
						$chk = $rb==$r['id'] ? 'checked' : '';
						echo "<td><input type='radio' name='rb' value='{$r['id']}' onClick='submit()' $chk /></td>";
						echo "<td>{$r['id']}</td>";
						echo "<td align='left'>{$r['toyname']}</td></tr>";
						$ci++;
					}

					?>
				</tbody>
				</table>
			</div>
		</form>
	</div>
	</body>
	</html>

	<?php
	function add_toy () {
		global $conn, $id, $id_kind, $name, $price, $brand, $made, $description, $image, $errmess;
		$query = pg_query($conn, "select * from toy where id='$id'");
		if (pg_num_rows($query)>0)
			$errmess = "ID existed";
		else 
			pg_query($conn, "insert into toy values ('$id', '$id_kind', '$name', '$price', '$brand', '$made', '$description', '$image')");
	}

	function update_toy () {
		global $conn, $rb, $id, $id_kind, $name, $price, $brand, $made, $description, $image, $errmess;
		$query = pg_query($conn, "select * from toy where id='$id'");
		$queryrb = pg_query($conn, "select * from toy where id='$rb'");
		if($id==$rb || !$queryrb)
			pg_query($conn, "update toy set id='$id', id_kindtoy='$id_kind', toyname='$name', price = '$price', brand = '$brand', made = '$made', toydescription = '$description', img = '$image' where id='$rb'");
			else
				$errmess = 'Fail to update';
		}
	?>