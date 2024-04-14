
<?php
echo "establish1 ". getcwd();
include "../../back/config.php";

	if(isset($_POST['update'])){
		$what_id = $_POST['room_id'];
		$floor_number 	= $_POST['floor#'];
		$room_number 	= $_POST['room#'];
		$buildingname 	= $_POST['building_name'];

		$sql = "UPDATE `registries` 
				SET
					`bldg` 		= '$buildingname',
					`floor`		= '$floor_number',
					`` 	= '$room_number' 
				WHERE 
					`id`		= '$what_id'";


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
			$floor_number 	= $row['floor#'];
			$what_id 	= $row['room_id'];
			$room_number 	= $row['room#'];
		}
		include "../update/establishment-update.php";
	}	else {
		echo "else, estbalihsment-udpate2 here " . getcwd();
		header('Location: ../main_page.php');
		//echo isset($_POST['update']) . "\n";
		//echo isset($_GET['id']) . "\n";
	}

}
?>
