<?php
include "../../back/config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `studentsss` WHERE `id`='$id'";
		$result = $conn->query($sql);
	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
?>