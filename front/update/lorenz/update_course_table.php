<?php
include "../../../back/config.php";
    if (isset($_POST['update'])) {
        $coursename = $_POST['coursename'];
		$id_course = $_POST['id_course'];
        $sql = "UPDATE `courses_table` SET `coursename` = '$coursename' WHERE `id_course` = '$id_course'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

if (isset ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `courses_table` WHERE `id_course`='$id'";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $coursename = $row['coursename'];
            $id = $row['id_course'];
        }
    ?>
        <h2>Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>STUDENT COURSES</legend>
                Course Name:<br>
                <input type="text" name="coursename" value="<?php echo $coursename; ?>">
                <input type="hidden" name="id_course" value="<?php echo $id; ?>">    
                <br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
            </form>
            <a href="../../read/view_course_table.php">go back to view courses</a>
            </body>
            </html>
           
        <?php
        } else{
            header('Location: ../../read/view_course_table.php');
			}
}
?>