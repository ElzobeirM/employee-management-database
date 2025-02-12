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
$sql = "CREATE TABLE Personal_ID (
    Personal_ID_Number VARCHAR(255) PRIMARY KEY,
    Issuing_Agency DATE NOT NULL,
    Issuing_Date VARCHAR(50) NOT NULL,
    ID_Document_Number INT NOT NULL,
    Employee_ID_Number INT REFERENCES Employee_Information(Employee_ID_Number)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Personal_ID created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
