<?php
$server = 'ec2-54-83-52-191.compute-1.amazonaws.com';
$port = '5432';
$db = 'dfskju1voa688v';
$username = 'pddmywuahvrvnl';
$password = 'e7edebf216b6d25b5d0475d47bdf0c294502bc82d9e5cd0bf2a51d1ba5fd4054';
$conn = pg_connect("host='$server' dbname='$db' user='$username' password='$password'")
// mysqli_set_charset($conn, 'UTF8');
// mysqli_select_db($conn, $db);
?>