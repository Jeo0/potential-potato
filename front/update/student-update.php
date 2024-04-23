<?php
include "connection.php";
	if (isset($_POST['update'])) {
		$firstname = $_POST['firstnameee'];
		$id = $_POST['user_id'];
		$lastname = $_POST['lastnamee'];
		$email = $_POST['emailll'];
		$password = $_POST['passworddd'];
		$sex = $_POST['sex'];
		$middleInitial = $_POST['middleInitial'];
		$phone = $_POST['phone'];
		$sql1 = "UPDATE `studentsss` SET `firstnameee`='$firstname', `lastnamee`='$lastname', `emailll`='$email', `passworddd`='$password', `sex`='$sex', `middleInitial`='$middleInitial', `phone`='$phone' WHERE `id`='$id'";
		
		
		
		
		
		
		$birthday = strtotime($_POST["birthday"]);
		$birthday = date('Y-m-d', $birthday);
		$age = $_POST['age'];
		
		$sql2 = "UPDATE `bdayinfo` SET `birthday`='$birthday', `age`='$age'";
		
		

		$result = $conn->query($sql1);
		$result2 = $conn->query($sql2);		
		
		
		
		
		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];
	$sql = "SELECT * FROM `studentsss` JOIN `bdayinfo`WHERE `id`='$user_id' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$first_name = $row['firstnameee'];
			$lastname = $row ['lastnamee'];
			$email = $row['emailll'];
			$password = $row['passworddd'];
			$id = $row['ID'];
			$sex = $row['sex'];
			$middleInitial = $row['middleInitial'];
			$phone = $row['phone'];
			
			$birthday = $row['birthday'];
			$age = $row['age'];
			
			
			
			
			
			
			
			
			
			
			
			
			
		}
	?>
		<h2>User Update Form</h2>
		<form action="" method="post">
			<fieldset>
				<legend>Personal information:</legend>
				First name:<br>
				<input type="text" name="firstnameee" value="<?php echo $first_name; ?>">
				<input type="hidden" name="user_id" value="<?php echo $id; ?>">
				<br>
				Last name:<br>
				<input type="text" name="lastnamee" value="<?php echo $lastname; ?>">
				<br>
				Email:<br>
				<input type="email" name="emailll" value="<?php echo $email; ?>">
				<br>
				Password:<br>
				<input type="password" name="passworddd" value="<?php echo $password; ?>">
				<br>
				Sex:<br>
				<input type="radio" name="sex" value="Male" <?php if($sex == 'Male'){ echo "checked";} ?> >Male
				<input type="radio" name="sex" value="Female" <?php if($sex == 'Female'){ echo "checked";} ?>>Female
				<br><br>
				MiddleInitial:<br>
				<input type="text" name="middleInitial" value="<?php echo $middleInitial; ?>">
				<br>
				Phone: <br>
				<input type="int" name="phone" value="<?php echo $phone; ?>">
				<br>

				Birthday:<br>
				<input type="date" name="birthday" value="<?php echo $birthday; ?>">
				<br>
				Age:<br>
				<input type="int" name="age" value="<?php echo $age; ?>">
				<br>	
				<input type="submit" value="Update" name="update">				
			</fieldset>
		</form>
		</body>
		</html>
	
	<?php
	} else{
		header('Location: viieewww.php');
	}		
}
?>			