<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wwpsmt5';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');

//while ($camaba = mysqli_fetch_row($result)){
//	var_dump($camaba);
//}

 ?>