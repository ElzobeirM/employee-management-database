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
$sql = "CREATE TABLE Leave_Request (
    Leave_Request_ID INT PRIMARY KEY,
    Employee_ID_Number INT REFERENCES Employee(Employee_ID_Number),
    Leave_Type VARCHAR(50) NOT NULL,
    Start_Date DATE NOT NULL,
    End_Date DATE NOT NULL,
    Reason_for_Leave VARCHAR(255),
    Status VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Leave_Request created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
