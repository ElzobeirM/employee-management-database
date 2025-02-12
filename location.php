<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE Location (
    Location_ID INT PRIMARY KEY,
    Address_ID INT REFERENCES Employee(Address_ID),
    Country VARCHAR(50) NOT NULL,
    City VARCHAR(50) NOT NULL,
    State VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Location created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
