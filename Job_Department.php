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
$sql = "CREATE TABLE Job_Department (
    Job_ID INT PRIMARY KEY,
    Job_Dept VARCHAR(50) NOT NULL,
    Job_Position VARCHAR(50) NOT NULL,
    Description VARCHAR(255),
    Salary_Range VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Job_Department created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
