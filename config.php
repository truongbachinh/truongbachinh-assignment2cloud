<?php

$server = 'ec2-54-235-248-185.compute-1.amazonaws.com';
$port = '5432';
$db = 'd1duf0tgteaqhj';
$username = 'hqwafdloclpwqb';
$password = '2f96f28984b02ae418aeea9395250041e0bacb4c7864f00ada2ab63d77cb504b';
$conn = pg_connect("host='$server' dbname='$db' user='$username' password='$password'")
// mysqli_set_charset($conn, 'UTF8');
// mysqli_select_db($conn, $db);


?>