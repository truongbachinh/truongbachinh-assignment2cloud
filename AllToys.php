<?php 
$sql_all="select * from toy";
$query_all=pg_query($conn, $sql_all);
?>
<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">
	All of Toys
	</p>
<div class="row">
	<?php
	while ($line_all=pg_fetch_assoc($query_all)) {
		?>
		<div style="padding: 10px">
			<div class="card align-items-center" style="width: 300px; text-align: center;">
				<a href="index.php?xem=ToyInfo&id=<?php echo $line_all['id'] ?>">
					<div class="card-header">
						<img src="<?php echo $line_all['img'] ?>" style="width: 250px">
					</div>
					<div class="card-body">
						<p><?php echo $line_all['toyname'] ?></p>
					</div>
					<div class="card-footer">
						<span style="color: red; font-size: 14px;">
							<?php echo $line_all['price'].'VND' ?></span>
						</div>
					</a>
					
				</div>
			</div>
		<?php } ?>
	</div>
