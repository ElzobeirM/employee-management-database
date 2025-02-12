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
$sql = "CREATE TABLE Experience_Qualification (
    Experience_Qualification_ID INT PRIMARY KEY,
    Employee_ID_Number INT REFERENCES Employee_Information(Employee_ID_Number),
    Qualification_Experience_Name VARCHAR(50) NOT NULL,
    Description VARCHAR(255),
    Period VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Experience_Qualification created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
