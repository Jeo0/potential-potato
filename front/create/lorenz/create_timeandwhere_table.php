<?php
include "../../../back/create/lorenz/timeandwhere.php";
?>

<!DOCTYPE html>
<html>
<body>
<h2>SCHEDULE</h2>
<form action="" method="POST">
  <fieldset>
	 <legend>Course information:</legend>
	 ID:<br>
	 <input type="number" name="id_timeandwhere">
	 <br>
	 Time:<br>
	 <input type="time" name="time">
	 <br>
	 Establishment:<br>
	 <input type="number" name="id_establishment">
	 <br>
	 Section:<br>
	 <input type="number" name="id_section">
	 <br><br>
	 <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
<a href="../../read/student-portal.php">go back to student portal</a>
</body>
</html>