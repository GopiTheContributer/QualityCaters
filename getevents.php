<?php
session_start();

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');

if($mysql_connection->connect_error){
  die('got connection error ' + mysqli_error());
}

$sqlQuery =  "select event_id id, event_name name from events";
$queryResult = $mysql_connection->query($sqlQuery)
or die("couldnt able to execute the query given");

$i = 0;
if($queryResult->num_rows > 0){
  while($row = $queryResult->fetch_assoc()) {
    $response->rows[$i]['id'] = $row['id'];
    $response->rows[$i]['cell'] = array($row['id'], $row['name']);
    $i++;
  }
  echo json_encode($response);
}

$mysql_connection->close();
?>
