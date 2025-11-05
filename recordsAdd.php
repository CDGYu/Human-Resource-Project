<?php
include 'conn.php';

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_REQUEST['name'];
$dept = $_REQUEST['department'];
$pos = $_REQUEST['position'];
$hdate = $_REQUEST['hiredate'];
$sal = $_REQUEST['salary'];
$sql = "INSERT INTO EMPLOYEE (Name, Department, Position, Hire_Date, Salary)
VALUES ('$name', '$dept','$pos', '$hdate', $sal)";
echo $hdate;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<a href=\"/Algo\">Home</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>