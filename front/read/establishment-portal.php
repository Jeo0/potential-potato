<?php
/*
define('ROOT_PATH', dirname(__DIR__) . '/../../');	
include(ROOT_PATH."back/read/establishment.php");
 */
// current loc @ uni/front/read_or_something
echo dirname(realpath(__FILE__)) . "front me";
include "../../back/read/establishment-portal.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Establishment List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<h2>Establishments</h2>

		<table class="table">	
			<thead>
			<tr>	
				<th>Building</th>
				<th>Floor</th>
				<th>Room #</th>
				<th>mga actions</th>
			</tr>
			</thead>
			
			<tbody>
				<?php
					//echo $result;
					if ($result ->num_rows >0){
						while($row = $result->fetch_assoc()){

				?>
							<tr>
							<td><?php echo $row['bldg']; ?></td>
							<td><?php echo $row['floor']; ?></td>
							<td><?php echo $row['room #']; ?></td>
							<td> <a class="btn btn-info" href="../../back/update/establishment-update1.php?
								id=<?php echo $row['room_id']; ?>">
									Edit
								</a>&nbsp;<a class="btn btn-danger" href="../delete/establishment-delete.php?
								id=<?php echo $row['room_id'];		?>">
									Delete
								</a>
							</td>
							</tr>
				<?php 	}
					}	else{
						echo "bruv, cant<br>";
						header('Location: ../main_page.php');
					}
				?>
			</tbody>

		</table>

	</div>
<!-- current loc @ uni/front/read-->
<a href="../main_page.php">goback to main page</a>
<a href="../create/establishment-create.php">create new</a>
</body>
</html>




