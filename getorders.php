<?php
session_start();

$mysql_connection = new mysqli('localhost', 'root', 'root', 'qualitycaters');

if($mysql_connection->connect_error){
  die('got connection error ' + mysqli_error());
}

$sqlQuery = "SELECT o.order_id, o.booking_date, o.name, o.email, o.event_date
, o.no_of_persons,e.event_name, o.referred_by, o.referer_ph_no
, o.address
FROM orders o  inner join events e
on o.event_id = e.event_id
order by booking_date desc";

$queryResult = $mysql_connection->query($sqlQuery)
or die("Couldn t execute query.".mysql_error());
$i=0;

if($queryResult->num_rows > 0){
  // if db has data then we will populate it on grid
  while($row = $queryResult->fetch_assoc()) {
      $response->rows[$i]['id'] =$row['order_id'];
      $response->rows[$i]['cell'] = array($row['order_id']
       , $row['booking_date']
       , $row['name']
       , $row['email']
       , $row['event_date']
       , $row['no_of_persons']
       , $row['event_name']
       , $row['referred_by']
       , $row['referer_ph_no']
       , $row['address']);
      $i++;
    }
    echo json_encode($response);
  }

  $mysql_connection->close();
  ?>
