<?php  
define('ROOT_PATH', dirname(__DIR__) .'\\');	
include(ROOT_PATH.'back\\config.php'); ?>


<!DOCTYPE html>
<html>
<body>
	<h1>NoiceSign uup</h1>
		<legend>Tables:</legend>
		Establishment: <a href="<?php echo ROOT_PATH.'front\\read\\establishment-portal.php' ?>">List</a>&nbsp;<a href="<?php echo ROOT_PATH.'front\\create\\establishment-create.php' ?>">Create new</a><br>

		Employee: <a href="read/employee-portal.php">Here</a> &nbsp;<a href="create/employee-create.php">Create new</a><br>

		Student: <a href="read/students-portal.php">Here</a> &nbsp;<a href="create/students-create.php">Create new</a><br>

		Course: <a href="read/course-portal.php">Here</a> &nbsp;<a href="create/course-create.php">Create new</a><br>

		Subject: <a href="read/subject-lms.php">Here</a> &nbsp;<a href="create/subject-create.php">Create new</a><br>
		<br>
</body>

</html>
