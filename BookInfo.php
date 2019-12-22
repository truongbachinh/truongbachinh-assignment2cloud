<?php
$sql_book="select * from book where id=$_GET[id]";
$query_book=mysqli_query($conn, $sql_book);
$line_book=mysqli_fetch_array($query_book, MYSQLI_ASSOC);
?>

<form action="index.php" method="post" enctype="multipart/form-data">
  <hr>
  <div class="row">
    <div class="col-md-5" style="text-align: center;">
      <img src="images/<?php echo $line_book['img'] ?>" style="width: 300px" class="mx-auto d-block">
      <br><br>
      <h5><b><?php echo $line_book['bookname'] ?></b></h5>
      <br>
      <h5 style="color: red;">
        <?php echo $line_book['price'].'VND' ?>
      </h5>
      <br>
      <button type="submit" class="btn btn-success" name="buy" value="<?php echo $_GET['id'] ?>">Add to your cart</button>
    </div>
    <div class="col-md-7" style="text-align: center;">
      <h4>Book Information</h4>
      <br>
      <table class="table table-hover">
        <tbody>
          <tr>
            <td width="30%">Author</td>
            <td width="70%"><?php echo $line_book['author'] ?></td>
          </tr>
          <tr>
            <td>Publishing company</td>
            <td><?php echo $line_book['publish'] ?></td>
          </tr>
          <tr>
            <td>Introduce</td>
            <td><?php echo $line_book['bookdescription'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</form>