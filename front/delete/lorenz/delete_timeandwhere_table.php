<?php
include "../../../back/config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `timeandwhere_table` WHERE `id_timeandwhere`='$id'";
	 $result = $conn->query($sql);
	 if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
?>
<html>
	<a href="../../read/view_timeandwhere_table.php">go back to time and where</a>
</html>