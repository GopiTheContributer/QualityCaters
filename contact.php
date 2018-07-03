<?php
session_start();

$contactName = $_POST['contactName'];
$contactEmail =  $_POST['contactMail'];
$message =  $_POST['message'];

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');

$sql = "insert into contact(name, email, message) values('$contactName', '$contactEmail', '$message')";

if ($mysql_connection->query($sql)) {
    echo json_encode("contact added");
} else {
    echo json_encode("not added");
}

$mysql_connection->close();

?>
