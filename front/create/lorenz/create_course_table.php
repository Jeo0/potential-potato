<?php
include "../../../back/create/lorenz/course.php";
?>
<!DOCTYPE html>
<html>
<body>
<h2>STUDENT COURSES</h2>
<form action="" method="POST">
  <fieldset>
	 <legend>Course information:</legend>
	 Course ID:<br>
	 <input type="number" name="id_course">
	 <br>
	 Course Name:<br>
	 <input type="text" name="coursename">
	 <br><br>
	 <input type="submit" name="ubmit" value="Submit">
  </fieldset>
</form>
<a href="../../read/student-portal.php">go back to student portal</a>
</body>
</html>