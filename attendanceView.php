 <?php 

 include 'conn.php';
 
 $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class=\"table  table-dark table-striped\"><tr><th>Name</th><th>Status</th><th>Time In</th><th>Time Out</th></tr>";
        // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Status"]. "</td><td>" . $row["Time_In"] . "</td><td>" . $row["Time_Out"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<table class=\"table  table-dark table-striped\"><tr><th>Name</th><th>Status</th><th>Time In</th><th>Time Out</th></tr>";
    echo "</table>";
}

$conn->close();
?>