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
$sql = "CREATE TABLE Timesheet (
    Timesheet_ID INT PRIMARY KEY,
    Employee_ID_Number INT REFERENCES Employee(Employee_ID_Number),
    From_Date DATE NOT NULL,
    To_Date DATE NOT NULL,
    Worked_Hours DECIMAL(10,2) NOT NULL,
    Off_Hours DECIMAL(10,2),
    Days_Off INT,
    Over_Time INT REFERENCES Timesheet(Timesheet_ID),
    Extra_Days DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Timesheet created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
