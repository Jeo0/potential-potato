<?php
include "../../../back/config.php";
    if (isset($_POST['update'])) {
        $id_subject = $_POST['id_subject'];
		$id_subjectinfo = $_POST['id_subjectinfo'];
		$id_employee = $_POST['id_employee'];
		$id_timeandwhere = $_POST['id_timeandwhere'];
		$id_student = $_POST['id_student'];
        $sql = "UPDATE `subjectinfo_table` SET `id_subject` = '$id_subject', `id_employee` = '$id_employee', `id_timeandwhere` = '$id_timeandwhere', `id_student` = '$id_student' WHERE `id_subjectinfo` = '$id_subjectinfo'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

if (isset ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `subjectinfo_table` WHERE `id_subjectinfo`='$id'";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id_subject = $row['id_subject'];
			$id_employee = $row['id_employee'];
			$id_timeandwhere = $row['id_timeandwhere'];
            $id_student = $row['id_student'];
			$id = $row['id_subjectinfo'];
        }
    ?>
        <h2>Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>STUDENT SUBJECTS</legend>
                Subject:<br>
                <input type="number" name="id_subject" value="<?php echo $id_subject; ?>">
                <input type="hidden" name="id_subjectinfo" value="<?php echo $id; ?>">
				<br>
				Instructor:<br>
                <input type="number" name="id_employee" value="<?php echo $id_employee; ?>">
				<br>
				Time:<br>
                <input type="number" name="id_timeandwhere" value="<?php echo $id_timeandwhere; ?>">
				<br>
				Student:<br>
                <input type="number" name="id_student" value="<?php echo $id_student; ?>">
                <br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
            </form>

            <a href="../../read/view_subjectinfo_table.php">go beack to view subinfo table</a>
            </body>
            </html>
           
        <?php
        } else{
            header('Location: ../../read/view_subjectinfo_table.php');
			}
}
?>