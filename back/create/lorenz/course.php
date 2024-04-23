
<?php
include "../../../back/config.php";
  if (isset($_POST['submit'])) {
     $id_course = $_POST['id_course'];
	 $coursename = $_POST['coursename'];
	 $sql = "INSERT INTO `courses_table`(`id_course`, `coursename`) VALUES ('$id_course', '$coursename')";
	 $result = $conn->query($sql);

     if ($result == TRUE) {
	  echo "New record created succesfully.";
	 }else{
	  echo "Error:". $sql . "<br>". $conn->error;
	 }
	 $conn->close();
  }
?>