<?php
echo "<table border='1' style='margin-left: auto; margin-right: auto;'> 
<tr><td>ID</td><td>First Name</td><td>Last Name</td><td>Log Date</td></tr>";
$conn = mysqli_connect("localhost","root","","deo");
if(!$conn)
{   
die(mysqli_error());
}  

$sql = "SELECT * from person";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]. "</td><td>" .$row["fname"]. "</td><td>" . 
      $row["lname"]. "</td><td>". $row['logdt'] ."</td></tr>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>