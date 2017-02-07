<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




// gets random value from
$first = 0;
$last = (int) "SELECT LAST(id) FROM Customers;";
$loc = mt_random($first, $last)

$sql = "SELECT title, fact1, fact2, fact3, fact4, fact5, fact6 FROM articalDB WHERE id = $loc";
//$result = $conn->query($sql);
$result=mysqli_query($con,$sql)

//$row = $result->fetch_assoc(); //gets row of data
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row["Title"];
echo $row["fact1"];
echo $row["fact2"];
echo $row["fact3"];
echo $row["fact4"];
echo $row["fact5"];
echo $row["fact6"];

// Free result set
mysqli_free_result($result);

$conn->close();
?>