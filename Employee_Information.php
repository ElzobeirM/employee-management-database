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
$sql = "CREATE TABLE Employee_Information (
  Employee_ID_Number INT PRIMARY KEY,
  First_Name VARCHAR(50) NOT NULL,
  Middle_Name VARCHAR(50),
  Last_Name VARCHAR(50) NOT NULL,
  Date_of_Birth DATE NOT NULL,
  Qualification VARCHAR(255),
  Current_Experience INT,
  Type_of_Employee VARCHAR(20) NOT NULL,
  Gender VARCHAR(20) NOT NULL,
  Marital_Status VARCHAR(20) NOT NULL,
  Salary DECIMAL(10,2) NOT NULL,
  Address_ID INT REFERENCES Location(Address_ID),
  Department_Name VARCHAR(50) NOT NULL REFERENCES Department(Department_Name),
  Company_Name VARCHAR(50) NOT NULL REFERENCES Company(Company_Name)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Employee_Information created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
