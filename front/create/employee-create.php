<?php

include "../../back/create/employee-create.php";
?>


<!DOCTYPE html>
<html>
<body>
<h2>Signup Form</h2>
<form action="" method="POST">
    <fieldset>
        <legend>Personal information</legend>
        Employee ID: <br>
        <input type="number" name="id_employee" required>
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
        <input type="number" name="id_department" required>
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
