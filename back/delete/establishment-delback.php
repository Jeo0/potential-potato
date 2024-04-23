<?php
include "../../back/config.php";
if (isset($_GET['id'])) {
	$idEstablishment = $_GET['id'];


	$delEstablishment_query = "DELETE FROM establishment_table WHERE id_establishment = $idEstablishment;";
	// delete data from building_table & roomtype 
	// if there is no buildingname or no roomtype matching
	$delBuilding_query = "DELETE FROM building_table WHERE id_building NOT IN (SELECT id_building FROM establishment_table);";
	$delRoomType_query = "DELETE FROM roomtype_table WHERE id_roomtype NOT IN (SELECT id_roomtype FROM establishment_table);";

	# echo "<br>del estbalish : " . $delEstablishment_query . "<br>del build" . $delBuilding_query . "<br>del room" . $delRoomType_query . "<br>";


	$result = $conn->multi_query($delEstablishment_query . $delBuilding_query . $delRoomType_query);
	if ($result === TRUE) {
		echo "Record deleted successfully.";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>
