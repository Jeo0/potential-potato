<?php  
/*
define('ROOT_PATH', dirname(__DIR__) .'\\');	
include(ROOT_PATH.'back\\config.php'); 
 */

#$absolutePath = $_SERVER['DOCUMENT_ROOT'] . '../../back/create/config.php'
#include $absolutePath;
include "../back/config.php";
echo getcwd();
echo dirname(realpath(__FILE__));
?>


<!DOCTYPE html>
<html>
<body>
	<h1>TABLES</h1>
		<legend>Click links</legend>
		Establishment: 
			<a href="read/establishment-portal.php">View List</a>&nbsp;
			<a href="create/establishment-create.php">Create new</a><br>

		Employee: <a href="read/employee-portal.php">Here</a> &nbsp;<a href="create/employee-create.php">Create new</a><br>

		Student: <a href="read/students-portal.php">Here</a> &nbsp;<a href="create/students-create.php">Create new</a><br>

		Course: <a href="read/course-portal.php">Here</a> &nbsp;<a href="create/course-create.php">Create new</a><br>

		Subject: <a href="read/subject-lms.php">Here</a> &nbsp;<a href="create/subject-create.php">Create new</a><br>
		<br>
</body>

</html>
