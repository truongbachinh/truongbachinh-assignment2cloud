<?php
$server = 'ec2-54-221-243-211.compute-1.amazonaws.com';
$port = '5432';
$db = 'd8vs5hnqhbm7tn';
$username = 'sbnnzwollxlljf';
$password = '30c3fe77a1f17d26f4035bab8d3c719d8b39f56cef28f9fbe9555aa0b0082516';
$conn = pg_connect("host='$server' dbname='$db' user='$username' password='$password'")
// mysqli_set_charset($conn, 'UTF8');
// mysqli_select_db($conn, $db);
?>