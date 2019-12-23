<form action="index.php" method="post" enctype="multipart/form-data">
	<hr>
	<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Your Cart</p>
	<div>
		<p style="font-style: italic; color: blue; float: right;"><a href="index.php?" style="text-decoration: unset;">Continue Buying</a></p>
	</div>
	<div>
		<div>
			<table class="table table-bordered" style="text-align: center;">
				<thead>
					<tr>
						<th>NO.</th>
						<th>Toy Title</th>
						<th>Image</th>
						<th>Amount</th>
						<th>Price (VND)</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					foreach ($array as $value) {
						$sql_buy="select * from book where id = '$value'";
						$query_buy=pg_query($conn, $sql_buy);
						$line=pg_fetch_assoc($query_buy);
						?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $line['bookname'] ?></td>
							<td><img src="images/<?php echo $line['img'] ?>" width="60" height="70"></td>
							<td>1</td>
							<td><?php echo $line['price'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</br></br>
<div class="row">
	<div class="col-md-3">
		<a href="index.php?xem=dangnhap"><button type="submit" class="btn btn-success" style="margin-left: 105px;">Proceed to order</button></a>
	</div>

	<div class="col-md-3">
		<button type="submit" class="btn btn-success" name="cancel" style="margin-left: 132px;">Cancel the shopping cart</button>
	</div>
</div>
</form>