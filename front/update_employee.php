<?php
include "config.php";

if (isset($_POST['update'])) {
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $department_id = $_POST['department_id'];
    $position_id = $_POST['position_id'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employee_info SET 
            first_name='$first_name', 
            last_name='$last_name', 
            email='$email', 
            password='$password', 
            sex='$sex', 
            department_id='$department_id', 
            position_id='$position_id', 
            salary='$salary' 
            WHERE employee_id='$employee_id'";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];
    $sql = "SELECT * FROM employee_info WHERE employee_id='$employee_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $password = $row['password'];
            $sex = $row['sex'];
            $department_id = $row['department_id'];
            $position_id = $row['position_id'];
            $salary = $row['salary'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h2>Employee Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Personal Information:</legend>
            First Name:<br>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>"><br>
            Last Name:<br>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>"><br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>"><br>
            Sex:<br>
            <input type="radio" name="sex" value="Male" <?php if ($sex === 'Male') echo 'checked'; ?>> Male
            <input type="radio" name="sex" value="Female" <?php if ($sex === 'Female') echo 'checked'; ?>> Female
            <br>
            Department ID:<br>
            <input type="number" name="department_id" value="<?php echo $department_id; ?>"><br>
            Position ID:<br>
            <input type="number" name="position_id" value="<?php echo $position_id; ?>"><br>
            Salary:<br>
            <input type="text" name="salary" value="<?php echo $salary; ?>"><br>
            <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>">
            <br><br>
            <input type="submit" name="update" value="Update">
        </fieldset>
    </form>
</body>
</html>
<?php
        }
    } else {
        echo "Employee not found.";
    }
}
?>

