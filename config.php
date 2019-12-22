<?php

$server = 'ec2-184-73-232-93.compute-1.amazonaws.com';
$port = '5432';
$db = 'dfg9jcitt5aedg';
$username = 'zcqccnpdcwmhru';
$password = 'd75b3b8c75baf02745f9a2633801e350bc42e76c3c23bf036a5a7a9bb18819cb';
$conn = pg_connect("host='$server' dbname='$db' user='$username' password='$password'")
// mysqli_set_charset($conn, 'UTF8');
// mysqli_select_db($conn, $db);


?>