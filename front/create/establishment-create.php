<?php 
//include "../../back/create/establishment-create.php";
define('ROOT_PATH', dirname(__DIR__) .'\\');	
include(ROOT_PATH.'back\\create\\config.php'); 
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


<a href="<?php echo ROOT_PATH.'front\\main_page.php' ?>">gobacktomainpage</a>

</body>


</html>
