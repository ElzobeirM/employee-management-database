<?php
    include("connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from form fields
        $employee_id = $_POST['employee_id'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
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

        // Prepare and execute SQL statement to insert employee data
        $sql = "INSERT INTO Employee (Employee_ID_Number, First_Name, Middle_Name, Last_Name, Password, Date_of_Birth, Qualification, Current_Experience, Type_of_Employee, Gender, Marital_Status, Salary, Address_ID, Department_Name, Company_Name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("issssssisssssss", $employee_id, $first_name, $middle_name, $last_name, $password, $date_of_birth, $qualification, $current_experience, $type_of_employee, $gender, $marital_status, $salary, $address_id, $department_name, $company_name);
            $stmt->execute();
            // Redirect to a success page after registration
            header("Location: registration_success.php");
            exit();
        } else {
            // Error with prepared statement
            echo "Oops! Something went wrong. Please try again later.";
        }
        
        // Close statement
        $stmt->close();
        
        // Close connection
        $mysqli->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .registration-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            margin: 50px auto;
        }

        .registration-container h2 {
            margin-bottom: 20px;
            color: #333;
            background-color: #ffcc00;
            padding: 10px;
            border-radius: 5px;
        }

        .registration-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            align-self: center;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Employee Registration Form</h2>
        <form class="registration-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="employee_id">Employee ID:</label>
                <input type="text" id="employee_id" name="employee_id" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <input type="text" id="qualification" name="qualification" required>
            </div>
            <div class="form-group">
                <label for="current_experience">Current Experience:</label>
                <input type="number" id="current_experience" name="current_experience" required>
            </div>
            <div class="form-group">
                <label for="type_of_employee">Type of Employee:</label>
                <select id="type_of_employee" name="type_of_employee" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital Status:</label>
                <select id="marital_status" name="marital_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" id="salary" name="salary" required>
            </div>
            <div class="form-group">
                <label for="address_id">Address ID:</label>
                <input type="text" id="address_id" name="address_id" required>
            </div>
            <div class="form-group">
                <label for="department_name">Department Name:</label>
                <input type="text" id="department_name" name="department_name" required>
            </div>
            <div class="form-group">
                <label for="company_name">Company Name:</label>
                <input type="text" id="company_name" name="company_name" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
