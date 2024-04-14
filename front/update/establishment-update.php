<?php 
#include "../../back/update/establishment-update1.php";
?>


		<h2>User Update Form</h2>
		<form action="" method="post">
		<fieldset>
			<legend></legend>
			Building name:<br>
			<input type="text" name="building_name" value="<?php echo $buildingname; ?>"> <br>
			<input type="hidden" name="room_id" value="<?php echo $user_id; ?>"> <br>

			Floor #: <br>
			<input type="text" name="floor#" value="<?php echo $floor_number; ?>"> <br>

			Room #: <br>
			<input type="text" name="room#" value="<?php echo $room_number; ?>"> <br>


			<br>
			<br>
			<input type="submit" name="update" value="Update">
		</fieldset>
		</form>
		</body>
		</html>

<?php 
#include "../../back/update/establishment-update2.php";
?>
