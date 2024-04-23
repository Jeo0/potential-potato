
<?php
include "../../../back/config.php";
  if (isset($_POST['submit'])) {
	 $id_subject = $_POST['id_subject'];
	 $subject_name = $_POST['subject_name'];;
	 $sql = "INSERT INTO `subject_table`(`id_subject`, `subject_name`) VALUES ('$id_subject','$subject_name')";
	 $result = $conn->query($sql);
	 if ($result == TRUE) {
	  echo "New record created succesfully.";
	 }else{
	  echo "Error:". $sql . "<br>". $conn->error;
	 }
	 $conn->close();
  }
?>