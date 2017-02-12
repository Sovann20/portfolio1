<?php
$servername = "db319team131";
$username = "dbu319team131";
$password = "Y2YwYzBjMTI2";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//security precaution that modifies data sent, gets rid of extra spaces, backslshes, and prevents cross-site scripting
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data); //may want to get rid of
  $data = htmlspecialchars($data);
  return $data;
}





//gets data from form, check
$title = test_input($_POST["inputTitle"]);
$fact1 = test_input($_POST["input1"]);
$fact2 = test_input($_POST["input2"]);
$fact3 = test_input($_POST["input3"]);
$fact4 = test_input($_POST["input4"]);
$fact5 = test_input($_POST["input5"]);
$fact6 = test_input($_POST["input6"]);


 // $title = document.getElementByID("title").value;
 // $fact1 = document.getElementByID("input1").value;
 // $fact2 = document.getElementByID("input2").value;
 // $fact3 = document.getElementByID("input3").value;
 // $fact4 = document.getElementByID("input4").value;
 // $fact5 = document.getElementByID("input5").value;
 // $fact6 = document.getElementByID("input6").value;

 
$num;
//Gets ID 
if((int) "SELECT LAST(id) FROM Customers" == null)
{
	 $num= (int) "SELECT LAST(id) FROM Customers;"
}
else
{
	$num = (int) "SELECT LAST(id) FROM Customers;" + 1;
}

// inserts data onto table
$sql = "INSERT INTO Articles (id, title, fact1, fact2, fact3, fact4, fact5, fact6)

VALUES ('$num','$title', '$fact1', '$fact2', '$fact3', '$fact4', '$fact5', '$fact6')";

// validates added article
if ($conn->query($sql) === TRUE) {
    echo "Article created successfully";
} else {
    echo "Error creating article: " . $conn->error;
}

$conn->close();
?>