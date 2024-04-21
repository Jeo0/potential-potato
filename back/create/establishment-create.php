<?php
/*
define('ROOT_PATH', dirname(__DIR__) . '/../../');	
include(ROOT_PATH."back/config.php");
 */
// current loc @ uni/front/create fromt getcwd
include "../../back/config.php";
#echo "back\n" . getcwd() . "\n";
#echo dirname(realpath(__FILE__));

if (isset($_POST['submit']) ){
	$buildingName = $_POST['building_name'];
	$floorNumber = $_POST['floor_number'];
	$roomNumber = $_POST['room_number'];
	$roomType 	= $_POST['room_type'];


	$query_bldg	= "INSERT IGNORE INTO `building_table`(`buildingname`) VALUES ('$buildingName');";
	$query_roomtype = "INSERT IGNORE INTO `roomtype_table`(`roomtype`) VALUES ('$roomType');";
	$query_establishment = "INSERT INTO `establishment_table`(  `id_building`, `id_roomtype`, `floornum`, `roomnum`)
		VALUES (
			(SELECT id_building from building_table where buildingname = '$buildingName'),
			(SELECT id_roomtype from roomtype_table where roomtype = '$roomType'),
			'$floorNumber',	'$roomNumber'
		);";
		#VALUES ('$building', '$floorNumber', '$roomNumber' )";
	$query_all = $query_bldg . $query_roomtype . $query_establishment;

	#echo "<br><br>injceted code: ". $query_bldg . "<br><br>". $conn->error;
	#echo "injceted code: ". $query_roomtype . "<br><br>". $conn->error;
	#echo "injceted code: ". $query_establishment . "<br><br>". $conn->error;


	$result = $conn->multi_query($query_all);
	#$result = $conn->query($est_table);

	if($result == TRUE){
		echo "new record created succesfully.";
	} else{
		echo "Error: ". $query_all . "<br>". $conn->error;
	}


	$conn->close();

}

?>
