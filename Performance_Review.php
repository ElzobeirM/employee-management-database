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
$sql = "CREATE TABLE Performance_Review (
    Performance_Review_ID INT PRIMARY KEY,
    Employee_ID_Number INT REFERENCES Employee(Employee_ID_Number),
    Performance_Achievement VARCHAR(255),
    Performance VARCHAR(50) NOT NULL,
    Rate_Evaluate INT,
    Feedback_Report VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Performance_Review created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
