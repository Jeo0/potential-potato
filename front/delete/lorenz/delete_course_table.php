<?php
include "../../../back/config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `courses_table` WHERE `id_course`='$id'";
	 $result = $conn->query($sql);
	 if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
?>

<html>
	<a href="../../read/view_course_table.php">go back to course tables</a>
</html