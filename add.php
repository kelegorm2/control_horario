<?php

$servername = "localhost";
$username = "horariouser";
$password = "User214365/";
$dbname = "controlHorario";



$worker = addslashes($_GET['worker']);
$startWork1 = addslashes($_GET['startWork1']);
$endWork1 = addslashes($_GET['endWork1']);
$startWork2 = addslashes($_GET['startWork2']);
$endWork2 = addslashes($_GET['endWork2']);

//http://172.20.0.51/control_horario/add.php?worker=Albert&startWork1=0800&endWork1=1400&startWork2=1500&endWork2=1900


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO workerHours (aDate, worker, startWork1,endWork1,startWork2,endWork2)
VALUES (now(), '$worker', '$startWork1', '$endWork1', '$startWork2', '$endWork2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
