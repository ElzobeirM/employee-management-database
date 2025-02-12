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
$sql = "CREATE TABLE Company (
    Company_Name VARCHAR(50) PRIMARY KEY,
    Company_Address VARCHAR(255) NOT NULL,
    Company_Contact_Information VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Company created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
