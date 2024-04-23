<?php
include "../../../back/create/lorenz/subjectinfo.php";
?>

<!DOCTYPE html>
<html>
<body>
<h2>STUDENT SUBJECTS</h2>
<form action="" method="POST">
  <fieldset>
	 <legend>Course information:</legend>
	 ID:<br>
	 <input type="number" name="id_subjectinfo">
	 <br>
	 Subject:<br>
	 <input type="number" name="id_subject">
	 <br>
	 Instructor:<br>
	 <input type="number" name="id_employee">
	 <br>
	 Time:<br>
	 <input type="number" name="id_timeandwhere">
	 <br>
	 Student:<br>
	 <input type="number" name="id_student">
	 <br><br>
	 <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
<a href="../../read/student-portal.php">go back to student portal</a>
</body>
</html>