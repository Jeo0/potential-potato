<?php
include "../../back/create/students-create.php";
	
?>

<!DOCTYPE html>
<html>
<body>
<h2>Signup Form</h2>
<form  action="" method="POST">
	<fieldset>
		<legend>Personal Information:</legend>
		First name:<br>
		<input type="text" name="firstnameee">
		<br>
		Last name:<br>
		<input type="text" name="lastnamee">
		<br>
		Email:<br>
		<input type="email" name="emailll">
		<br>
		Password:<br>
		<input type="password" name="passworddd">
		<br>
		Sex:<br>
		<input type="radio" name="sex" value="Male">Male
		<input type="radio" name="sex" value="Female">Female
		<br>
		MiddleInitial:<br>
		<input type="text" name="middleInitial">
		<br>
		Phone:<br>
		<input type="int" name="phone">
		<br>
		Birthday:<br>
		<input type="date" name="birthday">
		<br>
		Age:<br>
		<input type="int" name="age">
		<br>
		<input type="submit" name="submit" value="submit">
		<br><br>
	</fieldset>
</form>
</body>
<a href="../../main_page.php">gobacktomainpage</a><br>
<a href="../read/student-portal.php">go back to list view</a>
</html>	
