<?php
include "../../../back/config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `subject_table` WHERE `id_subject`='$id'"; 
	 $result = $conn->query($sql);
	 if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
?>
<html>
	<a href="../../read/view_sub_table.php">go back to view_sub_table</a>
</html>