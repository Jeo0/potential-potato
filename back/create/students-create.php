<?php
include "../../back/config.php";
if (isset($_POST['submit'])) {
		$first_name = $_POST['firstnameee'];
		$last_name = $_POST['lastnamee'];
		$email = $_POST['emailll'];
		$sex = $_POST['sex'];
		$middleInitial = $_POST['middleInitial'];
		$phone = $_POST['phone'];
		$password = $_POST['passworddd'];

		$sql1 = "INSERT INTO `studentsss` (`firstnameee`, `lastnamee`, `emailll`, `sex`, `middleInitial`, `phone`, `passworddd`) 
		VALUES ('$first_name', '$last_name', '$email', '$sex', '$middleInitial', '$phone', '$password');";
		
		
		
		$birthday = strtotime($_POST["birthday"]);
		$birthday = date('Y-m-d', $birthday);
		$age = $_POST['age'];
		
		$sql2 = "INSERT INTO `bdayinfo` (`birthday`, `age`) 
		VALUES ('$birthday', '$age')";
		echo $sql2 . "<br><br>" . $sql1 . "<br><br>";
		

		$result = $conn->query($sql1);

		$result2 = $conn->query($sql2);
		
		

		

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}
		$conn->close();
	}
?>