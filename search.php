
<?php 	 	 	
$and="";
if (isset($_GET['idl'])) {
	$and="and id_kindtoy='$_GET[idl]'";
}

$searchText="";
if (isset($_POST['searchText'])) {
	$searchText=$_POST['searchText'];
}

$sql_search="select * from toy where toyname LIKE '%$searchText%' " . $and;
$query_search=pg_query($conn, $sql_search);

$line_kind="";
if (isset($_GET['idl'])) {
	$sql_kind="select * from kindtoy where id='$_GET[idl]'";
	$query_kind=pg_query($conn, $sql_kind);
	$line_kind=pg_fetch_assoc($query_kind);
}
?>

<hr>

<?php
if ($line_kind) { ?>
	<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;"><?php echo $line_kind['kindtoy'] ?>
	</p>
<?php
}
?>
<div class="row">
	<?php 
	if($count=pg_num_rows($query_search)==0) { ?>
		<h4>No Toy Found</h4>
		<?php 
	}else{
		?>
		<?php
		while ($line_search=pg_fetch_assoc($query_search)) {
			?>
			<div style="padding: 10px">
				<div class="card align-items-center" style="width: 300px; text-align: center;">
					<a href="index.php?xem=ToyInfo&id=<?php echo $line_search['id'] ?>">
						<div class="card-header">
							<img src="images/<?php echo $line_search['img'] ?>" style="width: 250px">
						</div>
						<div class="card-body">
							<p><?php echo $line_search['toyname'] ?></p>
						</div>
						<div class="card-footer">
							<span style="color: red; font-size: 14px;">
								<?php echo $line_search['price'].'VND' ?>									
							</span>
						</div>
					</a>

				</div>
			</div>
			<?php 
		}
	}
	?>
</div>
