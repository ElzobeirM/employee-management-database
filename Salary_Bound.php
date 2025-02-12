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
$sql = "CREATE TABLE Salary_Bound (
    Salary_ID INT PRIMARY KEY,
    Job_ID INT REFERENCES Job_Title(Job_Title_ID),
    Amount DECIMAL(10,2) NOT NULL,
    Annual DECIMAL(10,2) NOT NULL,
    Bonus DECIMAL(10,2),
    Deduction DECIMAL(10,2),
    Taxes DECIMAL(10,2) NOT NULL,
    Insurance DECIMAL(10,2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Salary_Bound created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
