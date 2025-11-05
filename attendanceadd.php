<?php
	include 'conn.php';

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_REQUEST['name'];
$status = $_REQUEST['status'];
$timein = $_REQUEST['time_in'];
$timeout = $_REQUEST['time_out'];
$sql = "INSERT INTO ATTENDANCE (Name, Status, Time_In, Time_Out)
VALUES ('$name', '$status', '$timein', '$timeout')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
  echo "<a href=\"/Algo\">Home</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
 ?>