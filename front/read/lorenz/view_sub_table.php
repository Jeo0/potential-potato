<?php
include "../../../back/read/lorenz/subjectinfo.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
<link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
	<div class = "container">
		<h2>SUBJECTS</h2>
<table class ="table">
	<thead>
		<tr>
		<th>Subject ID</th>
		<th>Subject Name</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
		
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>
				<tr>
					<td><?php echo $row['id_subject']; ?></td>
					<td><?php echo $row['subject_name']; ?></td>
					<td><a class="btn btn-info" href="../../update/update_sub_table.php?id=<?php echo $row['id_subject']; ?>">
						Edit</a> 
					&nbsp; 
					<a class="btn btn-danger" href="../../delete/delete_sub_table.php?id=<?php echo $row['id_subject']; ?>">
						Delete</a>
					</td>
				</tr>
		<?php 		}
			}
		?>
	</tbody>
</table>
	</div>
</body>
<a href="../student-portal.php">go back to student-portal</a><br>
<a href="../../create/lorenz/create_sub_table.php">create new sub table</a>
</html>