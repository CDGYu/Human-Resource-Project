 <?php 

 include 'conn.php';
 
 $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM performance";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class=\"table  table-dark table-striped\"><tr><th>Name</th><th>Grade</th><th>Feedback</th>";
        // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Grade"]. "</td><td>" . $row["Feedback"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<table class=\"table  table-dark table-striped\"><tr><th>Name</th><th>Grade</th><th>Feedback</th>";
    echo "</table>";
}

$conn->close();
?>