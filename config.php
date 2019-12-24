<?php
$server = 'ec2-54-83-1-101.compute-1.amazonaws.com';
$port = '5432';
$db = 'd6cac6q5pb9fml';
$username = 'hrqetlilclbrou';
$password = '049705d314bfa1551aa9456d5eca053977b81ca8dca003428d85481c260aa17a';
$conn = pg_connect("host='$server' dbname='$db' user='$username' password='$password'")
// mysqli_set_charset($conn, 'UTF8');
// mysqli_select_db($conn, $db);
?>