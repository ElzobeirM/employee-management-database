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
$sql = "CREATE TABLE Attendance_Record (
    Attendance_Record_ID INT PRIMARY KEY,
    Timesheet_ID INT REFERENCES Timesheet(Timesheet_ID),
    Date DATE NOT NULL,
    Present VARCHAR(1),
    Late_Arrival VARCHAR(1),
    Early_Departure VARCHAR(1),
    Reason_for_Absence VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Attendance_Record created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
