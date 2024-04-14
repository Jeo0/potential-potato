
<?php
echo getcwd();
include "../../back/config.php";

	if(isset($_POST['update'])){
		$user_id 	= $_POST['id'];
		$perstname 	= $_POST['firstname'];
		$gender 	= $_POST['gender'];

		$sql = "UPDATE `registries` 
				SET
					`firstname` = '$perstname',
					`gender` 	= '$gender' 
				WHERE 
					`id`		= '$user_id'";


		$result = $conn->query($sql);
		//echo $result;

		if($result == TRUE){
			echo "UpdDaTeD noicely";
			//echo "success: " . $sql . "<br>" . $conn -> error;
		} else{
			echo "Error: " . $sql . "<br>" . $conn -> error;
		}

	}

if(isset($_GET['id'])){
	$user_id = $_GET['id'];
	$sql = "
		SELECT * FROM `registries` 
		where `id`='$user_id' ";

	$result = $conn->query($sql);
	if($result -> num_rows >0){
		while($row = $result ->fetch_assoc()){
			$perstname 	= $row['firstname'];
			$user_id 	= $row['id'];
			$gender 	= $row['gender'];
		}
	?>
