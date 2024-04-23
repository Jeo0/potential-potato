<?php
include "../../../back/read/lorenz/timeandwhere.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
<link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
	<div class = "container">
		<h2>SCHEDULE</h2>
<table class ="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Time</th>
		<th>Establishment</th>
		<th>Section</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
		
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>
				<tr>
					<td><?php echo $row['id_timeandwhere']; ?></td>
					<td><?php echo $row['time']; ?></td>
					<td><?php echo $row['id_establishment']; ?></td>
					<td><?php echo $row['id_section']; ?></td>
					<td><a class = "btn btn-info" href = "update_timeandwhere_table.php?id=<?php echo $row['id_timeandwhere']; ?>">
						Edit</a>
					&nbsp;
					<a class = "btn btn-danger" href = "delete_timeandwhere_table.php?id = <?php echo $row['id_timeandwhere']; ?>">
						Delete</a>
					</td>
				</tr>
		<?php 		}
			}
		?>
	</tbody>
</table>
	</div>
<a href="../student-portal.php">go back to student-portal</a><br>
<a href="../../create/lorenz/create_timeandwhere_table.php">create new time and where</a>
</body>
</html>