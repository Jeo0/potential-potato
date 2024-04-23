<?php
include "../../../back/config.php";
  if (isset($_POST['submit'])) {
     $id_subjectinfo  = $_POST['id_subjectinfo'];
	 $id_subject = $_POST['id_subject'];
	 $id_employee = $_POST['id_employee'];
	 $id_timeandwhere = $_POST['id_timeandwhere'];
	 $id_student = $_POST['id_student'];
	 $sql = "INSERT INTO `subjectinfo_table`(`id_subjectinfo`, `id_subject`, `id_employee`, `id_timeandwhere`, `id_student`) VALUES ('$id_subjectinfo', '$id_subject', '$id_employee', '$id_timeandwhere', '$id_student')";
	 $result = $conn->query($sql);

     if ($result == TRUE) {
	  echo "New record created succesfully.";
	 }else{
	  echo "Error:". $sql . "<br>". $conn->error;
	 }
	 $conn->close();
}

    ?>