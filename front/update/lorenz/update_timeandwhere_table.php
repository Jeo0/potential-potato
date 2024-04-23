<?php
include "../../../back/config.php";
    if (isset($_POST['update'])) {
        $time = $_POST['time'];
		$id_timeandwhere = $_POST['id_timeandwhere'];
		$id_establishment = $_POST['id_establishment'];
		$id_section = $_POST['id_section'];
        $sql = "UPDATE `timeandwhere_table` SET `time` = '$time', `id_establishment` = '$id_establishment', `id_section` = '$id_section' WHERE `id_timeandwhere` = '$id_timeandwhere'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

if (isset ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `timeandwhere_table` WHERE `id_timeandwhere`='$id'";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $time = $row['time'];
			$id_establishment = $row['id_establishment'];
			$id_section = $row['id_section'];
            $id = $row['id_timeandwhere'];
        }
    ?>
        <h2>Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>SCHEDULE</legend>
                Time:<br>
                <input type="time" name="time" value="<?php echo $time; ?>">
                <input type="hidden" name="id_timeandwhere" value="<?php echo $id; ?>">
				<br>
				Establishment:<br>
                <input type="number" name="id_establishment" value="<?php echo $id_establishment; ?>">
				<br>
				Section:<br>
                <input type="number" name="id_section" value="<?php echo $id_section; ?>">
                <br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
            </form>
            <a href="../../read/view_timeandwhere_table.php">go beack to view timeandwhere table</a>
            </body>
            </html>
           
        <?php
        } else{
            header('Location: ../../read/view_timeandwhere_table.php');
			}
}
?>