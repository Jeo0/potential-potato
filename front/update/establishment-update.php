
<?php
echo "establish1 ". getcwd();
include "../../back/config.php";

	if(isset($_POST['update'])){
		$what_id = $_POST['room_id'];
		$floor_number 	= $_POST['floor#'];
		$room_number 	= $_POST['room#'];
		$buildingname 	= $_POST['building_name'];

		$sql = "UPDATE `establishment` 
				SET
					`bldg` 		= '$buildingname',
					`floor`		= '$floor_number',
					`room #` 	= '$room_number' 
				WHERE 
					`room_id`		= '$what_id'";


		echo $sql;
		$result = $conn->query($sql);
		//echo $result;

		if($result == TRUE){
			echo "UpdDaTeD noicely";
			echo "success: " . $sql . "<br>" . $conn -> error;
		} else{
			echo "Error: " . $sql . "<br>" . $conn -> error;
		}

	}

if(isset($_GET['id'])){
	$what_id = $_GET['id'];
	$sql = "
		SELECT * FROM `establishment` 
		where `room_id`='$what_id' ";

	$result = $conn->query($sql);
	if($result -> num_rows >0){
		while($row = $result ->fetch_assoc()){
			$floor_number 	= $row['floor'];
			#$what_id 		= $row['room_id'];
			$room_number 	= $row['room #'];
			$buildingname 	= $row['bldg'];
			echo "<br><br>inside get while loop <br>ID:" . $what_id . "<br><br>";
		}
	?>



		<h2>User Update Form</h2>
		<form action="" method="post">
		<fieldset>
			<legend></legend>
			Building name:<br>
			<input type="text" name="building_name" value="<?php echo $buildingname; ?>"> <br>
			<input type="hidden" name="room_id" value="<?php echo $what_id; ?>"> <br>

			Floor #: <br>
			<input type="text" name="floor#" value="<?php echo $floor_number; ?>"> <br>

			Room #: <br>
			<input type="text" name="room#" value="<?php echo $room_number; ?>"> <br>


			<br>
			<br>
			<input type="submit" name="update" value="Update">
		</fieldset>
		</form>
<!-- current loc @ uni/front/read-->
<a href="../read/establishment-portal.php">goback to view list</a><br>
		</body>
		</html>

<?php 
	}	else {
		echo "else, estbalihsment-udpate2 here " . getcwd();
		header('Location: ../main_page.php');
		//echo isset($_POST['update']) . "\n";
		//echo isset($_GET['id']) . "\n";
	}

}
?>
