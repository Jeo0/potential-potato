<?php
include "../../../back/config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `subjectinfo_table` WHERE `id_subjectinfo`='$id'";
	 $result = $conn->query($sql);
	 if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
?>
<html>
	<a href="../../read/view_subjectinfo_table.php">go back to subject info</a>
</html>