<?php
// Include database connection
include("connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $qualification = $_POST['qualification'];
    $current_experience = $_POST['current_experience'];
    $type_of_employee = $_POST['type_of_employee'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $salary = $_POST['salary'];
    $address_id = $_POST['address_id'];
    $department_name = $_POST['department_name'];
    $company_name = $_POST['company_name'];
    $password = $_POST['password'];

    // Prepare SQL statement to insert data into Employee table
    $sql = "INSERT INTO Employee (Employee_ID_Number, First_Name, Middle_Name, Last_Name, Date_of_Birth, Qualification, Current_Experience, Type_of_Employee, Gender, Marital_Status, Salary, Address_ID, Department_Name, Company_Name, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssisssdisss", $employee_id, $first_name, $middle_name, $last_name, $date_of_birth, $qualification, $current_experience, $type_of_employee, $gender, $marital_status, $salary, $address_id, $department_name, $company_name, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
} else {
    // If the form is not submitted, redirect to the registration page
    header("Location: registration.php");
    exit();
}

// Close connection
$conn->close();
?>
