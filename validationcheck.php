<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');

if($mysql_connection->connect_error){
	die('got connection error ' + mysqli_error());
}

$queryResult = $mysql_connection->query("SELECT * FROM login WHERE username = '$username' and PASSWORD = '$password' ") or die("couldn't able to execute the query");

if($queryResult->num_rows == 1){
	echo json_encode('valid login');
	$_SESSION['user'] = 'Thendral Caters';
}
else {
	echo json_encode('invalid login');
}

$mysql_connection->close();
?>
