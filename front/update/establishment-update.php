
<?php
#echo "establish1 ". getcwd();
include "../../back/config.php";


	// finding options for the building name dropdown menu
	$sqlBuilding = "SELECT buildingname FROM building_table";
	$resultBuilding = $conn->query($sqlBuilding);
	$optionsBuilding = "";
	if ($resultBuilding->num_rows > 0) {
		while ($rowBuilding = $resultBuilding->fetch_assoc()) {
			$buildingname = $rowBuilding['buildingname'];
			$optionsBuilding .= "<option value='$buildingname'>$buildingname</option>";
		}
	} else echo "emt bildings.";
	

	// also find option for the roomtype dropdown menu
	$sqlRoomtype = "SELECT roomtype FROM roomtype_table";
	$resultRoomType = $conn->query($sqlRoomtype);
	$optionsRoomtype = "";
	if ($resultRoomType->num_rows > 0) {
		while ($rowRoomType = $resultRoomType->fetch_assoc()) {
			$roomtype = $rowRoomType['roomtype'];
			$optionsRoomtype .= "<option value='$roomtype'>$roomtype</option>";
		}
	} else echo "emt roomtypes";
	


	if(isset($_POST['update'])){
		$what_id 		= $_POST['id_establishment'];
		$floor_number 	= $_POST['floor#'];
		$room_number 	= $_POST['room#'];

		$buildingname 	= $_POST['building_name'];
		$roomtype	= $_POST['roomT'];


		//////////////////////////////
		// just check if the input is valid and that there are inside the building_table and roomtype_table
		/*
		$isValid = false;
		$checkBuildingname = "select count(*) from `building_table`
						where `id_building`	 = '$buildingname';";
		$checkRoomtype = "select count(*) from `roomtype_table`
						where `id_roomtype`		 = '$roomtype';";
		$checkResult = $conn->multi_query($checkBuildingname . $checkRoomtype);
		if ($checkResult && $checkResult->num_rows > 0) {
			$row = $checkResult->fetch_row();
			$count = $row[0];
			$isValid = ($count > 0);
		}
		//*/


		// allow roomnum to be null
		$sql = "UPDATE `establishment_table` 
				SET
					`id_building` 	= (select id_building from building_table where buildingname = '$buildingname'),
					`id_roomtype` 	= (select id_roomtype from roomtype_table where roomtype = '$roomtype' ),
					`floornum`		= NULLIF('$floor_number', ''),
					`roomnum` 		= NULLIF('$room_number', '')
				WHERE 
					`id_establishment`		= '$what_id';";


		#echo '<br><br>inject: '. $sql . '<br>';
		$result = $conn->query($sql);
		#echo $result;

		if($result == TRUE){
			#echo "UpdDaTeD noicely";
			echo "success: " . $sql . "<br>" . $conn -> error;
		} else 
			echo "Error: " . $sql . "<br>" . $conn -> error; 

		
	}

if(isset($_GET['id'])){
	$what_id = $_GET['id'];
	/*
	 * $sql = "
		SELECT * FROM `establishment_table` 
		where `id_establishment`='$what_id' ";
	*/ 
$sql = " SELECT b.buildingname, e.floornum, e.roomnum, r.roomtype, e.id_establishment
FROM establishment_table e
JOIN building_table b ON e.id_building = b.id_building
JOIN roomtype_table r ON e.id_roomtype = r.id_roomtype
	where e.id_establishment = '$what_id';";
	

	#echo "<br>GET ID<br> " . $sql . "<br>";
	$result = $conn->query($sql);
	if($result -> num_rows >0){
		while($row = $result ->fetch_assoc()){
			#$what_id 		= $row['id_establishment'];
			$floor_number 	= $row['floornum'];
			$room_number 	= $row['roomnum'];
			$buildingname 	= $row['buildingname'];
			$ROOMTYPE 		= $row['roomtype'];
			#echo "<br><br>inside get while loop <br>ID:" . $what_id . "<br><br>";
		}
	?>



		<h2>User Update Form</h2>
		<form action="" method="post">
		<fieldset>
			<legend></legend>
			Building name:<br>
			<select name="building_name" required> <?php echo $optionsBuilding?> </select>
			<!---
				<input type="text" name="building_name" value="<?php// echo $buildingname; ?>" required> <br>
			--->
			<input type="hidden" name="id_establishment" value="<?php echo $what_id; ?>"> <br>

			Floor #: <br>
			<input type="text" name="floor#" value="<?php echo $floor_number; ?>"> <br>

			Room #: <br>
			<input type="text" name="room#" value="<?php echo $room_number; ?>"> <br>

			Room type: <br>
			<select name="roomT" required> <?php echo $optionsRoomtype?> </select>
			<!---
				<input type="text" name="roomT" value="<?php //echo $ROOMTYPE; ?>" required> <br>
			-->


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
		#echo "else, estbalihsment-udpate2 here " . getcwd();
		header('Location: main_page.php');
		//echo isset($_POST['update']) . "\n";
		//echo isset($_GET['id']) . "\n";
	}

}
?>
