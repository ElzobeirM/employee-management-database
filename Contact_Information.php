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
$sql = "CREATE TABLE Contact_Information (
    Contact_ID INT PRIMARY KEY,
    Employee_ID_Number INT REFERENCES Employee_Information(Employee_ID_Number),
    Phone_Numbers VARCHAR(255),
    Phone_Number VARCHAR(255),
    Email_Address VARCHAR(255),
    Social_Media INT
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Contact_Information created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
