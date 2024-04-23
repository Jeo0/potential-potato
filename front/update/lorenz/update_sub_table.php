<?php
include "../../../back/config.php";
    if (isset($_POST['update'])) {
        $subject_name = $_POST['subject_name'];
        $id_subject = $_POST['id_subject'];
        $sql = "UPDATE `subject_table` SET `subject_name` = '$subject_name' WHERE `id_subject` = '$id_subject'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

if (isset ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `subject_table` WHERE `id_subject`='$id'";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subject_name = $row['subject_name'];
            $id = $row['id_subject'];
        }
    ?>
        <h2>User Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Personal Information:</legend>
                Subject Name:<br>
                <input type="text" name="subject_name" value="<?php echo $subject_name; ?>">
                <input type="hidden" name="id_subject" value="<?php echo $id; ?>">
                <br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
            </form>
            <a href="../../read/view_sub_table.php">go beack toview sub table </a>
            </body>
            </html>
           
        <?php
        } else{
            header('Location: ../../read/view_sub_table.php');
			}
}
?>
