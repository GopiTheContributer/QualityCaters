<?php
session_start();

$eventName = $_POST['eventName'];

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');


$sql = "insert into events(event_name) values('$eventName')";

if (mysqli_query($mysql_connection, $sql)) {
    echo json_encode("created");
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode("not inserted");
}

mysqli_close($mysql_connection);

?>
