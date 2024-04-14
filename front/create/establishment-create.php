<?php 
//include "../../back/create/establishment-create.php";
//define('ROOT_PATH', dirname(__DIR__) .'\\');	

#$absolutePath = $_SERVER['DOCUMENT_ROOT'] . '../../back/create/config.php'
#include $absolutePath;

// current loc @ uni/front/create fromt getcwd
include "../../back/create/establishment-create.php";
echo getcwd();
echo dirname(realpath(__FILE__));
#include(ROOT_PATH.'back\\create\\config.php'); 
// #echo "front\n". getcwd() . "\n";
?>


<!DOCTYPE html>
<html>
<body>
	<h1>NoiceSign uup</h1>
	<form action="" method="POST">
	<fieldset>
		<legend>BUILDINGS :</legend>
		Building name: <br>
		<input type="text" name="building_name"> <br>

		Floor #: <br>
		<input type="text" name="floor_number"> <br>
		<!--<input type="radio" name="gender" value="me GiRl">Female-->

		Room #: <br>
		<input type="text" name="room_number"> <br>
		<br> <br>

		<input type="submit" name="submit" value="submit">
	</fieldset>
	</form>



<a href="../main_page.php">gobacktomainpage</a><br>
<a href="../read/establishment-portal.php">go back to list view</a>

</body>


</html>
