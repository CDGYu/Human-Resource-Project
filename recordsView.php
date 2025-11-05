 <?php 
 include 'conn.php';

 $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
$arr = array();
if ($result->num_rows > 0) {

    echo "<table class=\"table  table-dark table-striped\"><th>Name</th><th>Department</th><th>Position</th><th>Hire Date</th><th>Salary</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
        
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Department"]. "</td><td>" . $row["Position"] . "</td><td>" . $row["Hire_Date"]. "</td><td>" . $row["Salary"] . "</td></tr>";
    }
    echo "</table>";

} else {
    echo "<table class=\"table  table-dark table-striped\"><th>Name</th><th>Department</th><th>Position</th><th>Hire Date</th><th>Salary</th></tr>";
    echo "</table>";
}

$conn->close();

?>