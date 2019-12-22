<?php

$server = 'localhost';
$db = 'php';
$username = 'root';
$password = '';
$conn = mysqli_connect($server, $username, $password, $db);
mysqli_set_charset($conn, 'UTF8');
mysqli_select_db($conn, $db);

?>