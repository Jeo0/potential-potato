<?php
include "../../back/config.php";


if (isset($_POST['submit'])) {
    // Fetching form data
    $employee_id = $_POST['id_employee'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_initial = isset($_POST['middle_initial']) ? $_POST['middle_initial'] : "";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $department_id = $_POST['id_department'];
    $department = $_POST['department'];
    $position_id = $_POST['position_id'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $building_id = $_POST['building_id'];
    $building_name = $_POST['buildingname'];

    // Insert department if not exists
    $sqlDepartment = "INSERT INTO department_table (id_department, department, building_id, buildingname) 
                      VALUES ('$department_id', '$department', '$building_id', '$building_name')
                      ON DUPLICATE KEY UPDATE department = '$department', building_id = '$building_id', buildingname = '$building_name'";
    $resultDepartment = $conn->query($sqlDepartment);

    // Insert position if not exists
    $sqlPosition = "INSERT INTO employee_position_table (position_id, position) VALUES ('$position_id', '$position')
                    ON DUPLICATE KEY UPDATE position = '$position'";
    $resultPosition = $conn->query($sqlPosition);

    // Insert employee info
    $sqlEmployeeInfo = "INSERT INTO employee_info_table (id_employee, first_name, last_name, middle_initial, email, password, sex, id_department, position_id, salary)
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