<?php
include "../../../back/read/lorenz/course.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
<link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
	<div class = "container">
		<h2>STUDENT COURSES</h2>
<table class ="table">
	<thead>
		<tr>
		<th>Course ID</th>
		<th>Course Name</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
		
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>
				<tr>
					<td><?php echo $row['id_course']; ?></td>
					<td><?php echo $row['coursename']; ?></td>
					<td><a class = "btn btn-info" href = "../../update/update_course_table.php?id=<?php echo $row['id_course']; ?>">
						Edit</a>
					&nbsp;
					<a class = "btn btn-danger" href = "../../delete/delete_course_table.php?id=<?php echo $row['id_course']; ?>">
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
<a href="../../create/lorenz/create_course_table.php">create new course </a>
</html>