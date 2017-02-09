

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

// sql to create table
$sql2 = "CREATE TABLE Articles (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(1000) NOT NULL,
fact1 VARCHAR(1000) NOT NULL,
fact2 VARCHAR(1000) NOT NULL,
fact3 VARCHAR(1000) NOT NULL,
fact4 VARCHAR(1000) NOT NULL,
fact5 VARCHAR(1000) NOT NULL,
fact6 VARCHAR(1000) NOT NULL
)";


// Creates database
$sql = "CREATE DATABASE articleDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

//creates table
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>