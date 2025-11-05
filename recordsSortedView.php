 <?php 
 include 'conn.php';

 $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Name, Department, Position, Hire_Date, Salary  FROM employee";
$result = $conn->query($sql);
$arr = array();
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
        
    }

    echo "<table class=\"table  table-dark table-striped\"><th>Name</th><th>Department</th><th>Position</th><th>Hire Date</th><th>Salary</th></tr>";
    $sortedArr = selectionSort($arr); 

    for($i = 0; $i < sizeof($sortedArr); $i++) {
       echo "<tr><td>" . $sortedArr[$i]["Name"]. "</td><td>" . $sortedArr[$i]["Department"]. "</td><td>" .$sortedArr[$i]["Position"] . "</td><td>" . $sortedArr[$i]["Hire_Date"]. "</td><td>" . $sortedArr[$i]["Salary"] . "</td></tr>";
   }
   echo "</table>";
} else {
    echo "<table class=\"table  table-dark table-striped\"><th>Name</th><th>Department</th><th>Position</th><th>Hire Date</th><th>Salary</th></tr>";
    echo "</table>";
}

$conn->close();


function selectionSort($arr) { 

    for ($i = 0; $i < sizeof($arr) - 1; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < sizeof($arr); $j++) {
            if ($arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }
        if ($arr[$i] > $arr[$min_index]) { 
            $tmp = $arr[$i]; 
            $arr[$i] = $arr[$min_index]; 
            $arr[$min_index] = $tmp; 
        } 
    }

    
    return $arr; 
} 
?>