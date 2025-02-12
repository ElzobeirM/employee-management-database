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
$sql = "CREATE TABLE Department (
    Department_Name VARCHAR(50) PRIMARY KEY,
    Department_Head INT REFERENCES Employee(Employee_ID_Number),
    c_First_Name VARCHAR(50) NOT NULL,
    Company_Name VARCHAR(50) REFERENCES Company(Company_Name)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Department created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
