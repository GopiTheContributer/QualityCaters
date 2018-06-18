<?php
session_start();

$address = $_POST['address'];
$referredPhoneNo =  $_POST['referredPhoneNo'];
$referredBy =  $_POST['referredBy'];
$eventValue = $_POST['eventValue'];
$noOfPersons =  $_POST['noOfPersons'];
$eventDate =  $_POST['eventDate'];
$email =  $_POST['email'];
$name = $_POST['name'];

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');

$sql = "insert into orders(address, email, event_date, event_id, name, no_of_persons, referer_ph_no, referred_by) values('$address', '$email', '$eventDate', $eventValue, '$name', $noOfPersons, $referredPhoneNo, '$referredBy')";

if (mysqli_query($mysql_connection, $sql)) {
    echo json_encode("New record created successfully");
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode("record not inserted");
}

mysqli_close($mysql_connection);

?>
