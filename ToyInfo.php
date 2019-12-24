<?php
$sql_toy="select * from toy where id=$_GET[id]";
$query_toy=pg_query($conn, $sql_toy);
$line_toy=pg_fetch_assoc($query_toy);
?>

<form action="index.php" method="post" enctype="multipart/form-data">
  <hr>
  <div class="row">
    <div class="col-md-5" style="text-align: center;">
      <img src="images/<?php echo $line_toy['img'] ?>" style="width: 300px" class="mx-auto d-block">
      <br><br>
      <h5><b><?php echo $line_toy['toyname'] ?></b></h5>
      <br>
      <h5 style="color: red;">
        <?php echo $line_toy['price'].'VND' ?>
      </h5>
      <br>
      <button type="submit" class="btn btn-success" name="buy" value="<?php echo $_GET['id'] ?>">Add to your cart</button>
    </div>
    <div class="col-md-7" style="text-align: center;">
      <h4>Toy Information</h4>
      <br>
      <table class="table table-hover">
        <tbody>
          <tr>
            <td width="30%">brand</td>
            <td width="70%"><?php echo $line_toy['brand'] ?></td>
          </tr>
          <tr>
            <td>madeing company</td>
            <td><?php echo $line_toy['made'] ?></td>
          </tr>
          <tr>
            <td>Introduce</td>
            <td><?php echo $line_toy['toydescription'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</form>