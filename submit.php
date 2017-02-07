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

//security precaution that modifies data sent, gets rid of extra spaces, backslshes, and prevents cross-site scripting
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data); //may want to get rid of
  $data = htmlspecialchars($data);
  return $data;
}



//gets data from form, check
$title = test_input($_POST["title"]);
$fact1 = test_input($_POST["fact1"]);
$fact2 = test_input($_POST["fact2"]);
$fact3 = test_input($_POST["fact3"]);
$fact4 = test_input($_POST["fact4"]);
$fact5 = test_input($_POST["fact5"]);
$fact6 = test_input($_POST["fact6"]);

// inserts data onto table
$sql = "INSERT INTO Articles (title, fact1, fact2, fact3, fact4, fact5, fact6)

VALUES ('$title', '$fact1', '$fact2', '$fact3', '$fact4', '$fact5', '$fact6')";

// validates added artical
if ($conn->query($sql) === TRUE) {
    echo "Article created successfully";
} else {
    echo "Error creating article: " . $conn->error;
}

$conn->close();
?>