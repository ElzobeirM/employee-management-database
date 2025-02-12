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
$sql = "CREATE TABLE Payroll (
    Payroll_ID INT PRIMARY KEY,
    Employee_ID_Number INT REFERENCES Employee(Employee_ID_Number),
    Job_ID INT REFERENCES Job_Title(Job_Title_ID),
    Salary_ID INT REFERENCES Salary_Bound(Salary_ID),
    Data VARCHAR(255),
    Report VARCHAR(255),
    Total_Amount DECIMAL(10,2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Payroll created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
