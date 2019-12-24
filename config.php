<?php

$server = 'ec2-174-129-234-111.compute-1.amazonaws.com';
$port = '5432';
$db = 'de0odetf378j17';
$username = 'ptovprhtteexpw';
$password = 'd9184163181fc10c0562651e43da8815ce2ba0e1593969a44eb819031c3ba245';
$conn = pg_connect("host='$server' dbname='$db' user='$username' password='$password'")
// mysqli_set_charset($conn, 'UTF8');
// mysqli_select_db($conn, $db);


?>