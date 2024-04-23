<?php
include "../../back/read/students-portal.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h2>studentsss bday info</h2>
<table class="table">




	<thead>
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Sex</th>
		<th>Password</th>
		<th>MiddleInitial</th>
		<th>Phone</th>
		<th>Birthday</th>
		<th>Age</th>
		<th>Action</th><br>
	</tr>
	</thead>
	<tbody>
	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {					
		?>
					<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['firstnameee']; ?></td>
					<td><?php echo $row['lastnamee']; ?></td>
					<td><?php echo $row['emailll']; ?></td>
					<td><?php echo $row['passworddd']; ?></td>
					<td><?php echo $row['sex']; ?></td>
					<td><?php echo $row['middleInitial']; ?></td>
					<td><?php echo $row['phone']; ?></td>	
					<td><?php echo $row['birthday']; ?></td>
					<td><?php echo $row['age']; ?></td>						
					<td><a class="btn btn-info" href="../update/student-update.php?id=<?php echo $row['ID']; ?>">
							Edit</a>
						&nbsp;
						<a class="btn btn-danger" href="../delete/student-del.php?id=<?php echo $row['ID']; ?>">
							Delete</a>
						</td>
					</tr>
			<?php		}
			}
		
		?>
	</tbody>
</table>
	</div>
</body>
<a href="../../main_page.php">goback to main page</a><br>
<a href="../create/student-create.php">create new</a>
</html>
