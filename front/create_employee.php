<?php
include "config.php";

if (isset($_POST['submit'])) {
    // Fetching form data
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_initial = isset($_POST['middle_initial']) ? $_POST['middle_initial'] : "";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $department_id = $_POST['department_id'];
    $department = $_POST['department'];
    $position_id = $_POST['position_id'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $building_id = $_POST['building_id'];
    $building_name = $_POST['building_name'];

    // Insert department if not exists
    $sqlDepartment = "INSERT INTO department (department_id, department, building_id, building_name) 
                      VALUES ('$department_id', '$department', '$building_id', '$building_name')
                      ON DUPLICATE KEY UPDATE department = '$department', building_id = '$building_id', building_name = '$building_name'";
    $resultDepartment = $conn->query($sqlDepartment);

    // Insert position if not exists
    $sqlPosition = "INSERT INTO position (position_id, position) VALUES ('$position_id', '$position')
                    ON DUPLICATE KEY UPDATE position = '$position'";
    $resultPosition = $conn->query($sqlPosition);

    // Insert employee info
    $sqlEmployeeInfo = "INSERT INTO employee_info (employee_id, first_name, last_name, middle_initial, email, password, sex, department_id, position_id, salary)
                         VALUES ('$employee_id', '$first_name', '$last_name', '$middle_initial', '$email', '$password', '$sex', '$department_id', '$position_id', '$salary')";
    $resultEmployeeInfo = $conn->query($sqlEmployeeInfo);

    // Check if all queries were successful
    if ($resultDepartment && $resultPosition && $resultEmployeeInfo) {
        echo "New record created successfully.";
    } else {
        // Display error if any query fails
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<body>
<h2>Signup Form</h2>
<form action="" method="POST">
    <fieldset>
        <legend>Personal information</legend>
        Employee ID: <br>
        <input type="number" name="employee_id" required>
        <br>
        First name: <br>
        <input type="text" name="first_name" required>
        <br>
        Last name: <br>
        <input type="text" name="last_name" required>
        <br>
        Middle initial: <br>
        <input type="text" name="middle_initial">
        <br>
        Email: <br>
        <input type="email" name="email" required>
        <br>
        Department ID: <br>
        <input type="number" name="department_id" required>
        <br>
        Department Name: <br>
        <input type="text" name="department" required>
        <br>
        Building ID: <br>
        <input type="number" name="building_id" required>
        <br>
        Building Name: <br>
        <input type="text" name="building_name" required>
        <br>
        Position ID: <br>
        <input type="number" name="position_id" required>
        <br>
        Position Title: <br>
        <input type="text" name="position" required>
        <br>
        Salary: <br>
        <input type="number" name="salary" required>
        <br>
        Password: <br>
        <input type="password" name="password" required>
        <br>
        Sex: <br>
        <input type="radio" name="sex" value="Male" required>Male
        <input type="radio" name="sex" value="Female" required>Female
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>






    














