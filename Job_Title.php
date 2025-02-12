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
$sql = "CREATE TABLE Job_Title (
    Job_Title_ID INT PRIMARY KEY,
    Start_Date DATE NOT NULL,
    End_Date INT,
    UNIQUE(Job_Title_ID, Start_Date),
    CHECK (End_Date IS NULL OR End_Date >= Start_Date)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Job_Title created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
