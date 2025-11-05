<?php
	include 'conn.php';

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_REQUEST['name'];
$grade = $_REQUEST['grade'];
$feedback = $_REQUEST['feedback'];
$sql = "INSERT INTO PERFORMANCE (Name, Grade, Feedback)
VALUES ('$name', '$grade', '$feedback')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
  echo "<a href=\"/Algo\">Home</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
 ?>