<?php
    session_start(); // Start the session
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "project";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .module {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .module h2 {
            margin-top: 0;
        }

        .container h1 {
            margin-bottom: 20px;
        }

        .container a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: blue;
        }

        .container a:hover {
            text-decoration: underline;
        }

        .container form {
            margin-top: 10px;
        }

        .container form input[type="text"] {
            margin-bottom: 5px;
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .container form input[type="submit"] {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        .container form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>

    <div class="container">
        <h1>Welcome to Employee Module! <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></h1>
      
        <div class="module">
            <a href="Company.php"><h2>Company</h2></a>
        </div>

        <div class="module">
            <a href="Department.php"><h2>Department</h2></a>
        </div>

        <div class="module">
            <a href="Location.php"><h2>Location</h2></a>
        </div>

        <div class="module">
            <a href="Job_Title.php"><h2>Job Title</h2></a>
        </div>

        <div class="module">
            <a href="Job_Department.php"><h2>Job Department</h2></a>
        </div>

        <div class="module">
            <a href="Salary_Bound.php"><h2>Salary Bound</h2></a>
        </div>

        <div class="module">
            <a href="Employee_information.php"><h2>Employee Information</h2></a>
        </div>

        <div class="module">
            <a href="Contact_Information.php"><h2>Contact Information</h2></a>
        </div>

        <div class="module">
            <a href="Personal_ID.php"><h2>Personal ID</h2></a>
        </div>

        <div class="module">
            <a href="Experience_Qualification.php"><h2>Experience Qualification</h2></a>
        </div>
        
        <a href="logout.php">Logout</a> <!-- Add a link to logout.php to logout -->
    </div>

</body>
</html>
