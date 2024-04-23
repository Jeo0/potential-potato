<?php  
/*
define('ROOT_PATH', dirname(__DIR__) .'\\');	
include(ROOT_PATH.'back\\config.php'); 
 */

#$absolutePath = $_SERVER['DOCUMENT_ROOT'] . '../../back/create/config.php'
#include $absolutePath;
include "back/config.php";
//echo getcwd();
//echo dirname(realpath(__FILE__));
?>


<!DOCTYPE html>
<html>
<body>
	<h1>TABLES</h1>
		<legend>Click links</legend>
		Establishment: 
			<a href="front/read/establishment-portal.php">View List</a>&nbsp;
			<a href="front/create/establishment-create.php">Create new</a><br>

		Employee:
			<a href="front/read/employee-portal.php">View List</a>&nbsp;
			<a href="front/create/employee-create.php">Create new</a><br>

		Student:
			<a href="front/read/student-portal.php">View List</a>&nbsp;
			<a href="front/create/student-create.php">Create new</a><br>

		Subject:
			<a href="front/read/subject-portal.php">View List(exception)</a> <br>

		Course table: 
			<a href="front/read/lorenz/view_course_table.php">View List</a>&nbsp;
			<a href="front/create/lorenz/create_course_table.php">Create new</a><br>

		<br>
</body>

</html>
