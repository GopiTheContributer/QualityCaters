<?php

$contactName = $_POST['contactName'];
$contactEmail =  $_POST['contactMail'];
$message =  $_POST['message'];

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');

$sql = "insert into contact(name, email, message) values('$contactName', '$contactEmail', '$message')";

if (mysqli_query($mysql_connection, $sql)) {
    echo json_encode("contact added");
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode("not added");
}

mysqli_close($mysql_connection);

?>
