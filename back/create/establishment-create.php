<?php
/*
define('ROOT_PATH', dirname(__DIR__) . '/../../');	
include(ROOT_PATH."back/config.php");
 */
// current loc @ uni/front/create fromt getcwd
include "../../back/config.php";
echo "back\n" . getcwd() . "\n";
echo dirname(realpath(__FILE__));

if (isset($_POST['submit']) ){
	$building = $_POST['building_name'];
	$floorNumber = $_POST['floor_number'];
	$roomNumber = $_POST['room_number'];


	$sql = "INSERT INTO `establishment`(  `bldg`, `floor`, `room #`)
		VALUES ('$building', '$floorNumber', '$roomNumber' )";

	echo "injceted code: ". $sql . "<br>". $conn->error;


	$result = $conn->query($sql);

	if($result == TRUE){
		echo "new record created succesfully.";
	} else{
		echo "Error: ". $sql . "<br>". $conn->error;
	}


	$conn->close();

}

?>
