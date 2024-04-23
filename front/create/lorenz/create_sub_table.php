<?php
include "../../../back/create/lorenz/sub.php";
?>
<!DOCTYPE html>
<html>
<body>
<h2>SUBJECTS</h2>
<form action="" method="POST">
  <fieldset>
	<legend>
	</legend>
	Subject ID:<br>
	<input type="number" name="id_subject">
	<br>
	Subject Name:<br>
	<input type="text" name="subject_name">
	<br><br>
	<input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
<a href="../../read/student-portal.php">go back to student portal</a>
</body>
</html>