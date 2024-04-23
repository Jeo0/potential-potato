<?php
include "../../../back/config.php";
  if (isset($_POST['submit'])) {
     $id_timeandwhere = $_POST['id_timeandwhere'];
	 $time = $_POST['time'];
	 $id_establishment = $_POST['id_establishment'];
	 $id_section = $_POST['id_section'];
	 $sql = "INSERT INTO `timeandwhere_table`(`id_timeandwhere`, `time`, `id_establishment`, `id_section`) VALUES ('$id_timeandwhere', '$time', '$id_establishment', '$id_section')";
	 $result = $conn->query($sql);

     if ($result == TRUE) {
	  echo "New record created succesfully.";
	 }else{
	  echo "Error:". $sql . "<br>". $conn->error;
	 }
	 $conn->close();
  }
?>