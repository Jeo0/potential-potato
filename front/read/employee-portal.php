<?php
include "../back/config.php";

$sql = "SELECT e.id_employee, e.first_name, e.last_name, e.middle_initial, e.email, d.id_department, d.building_name, p.id_position, e.sex, e.salary
        FROM employee_info_table e
        LEFT JOIN department_table d ON e.id_department = d.id_department
        LEFT JOIN employee_position_table p ON e.id_position = p.id_position";

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Employee List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Building</th>
                <th>Position</th>
                <th>Sex</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id_employee']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['middle_initial']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['building_name']; ?></td>
                    <td><?php echo $row['id_position']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td>
                        <a class="btn btn-info" href="update_employee.php?id=<?php echo $row['id_employee']; ?>">
                            Edit
                        </a>
                        &nbsp;
                        <a class="btn btn-danger" href="delete_employee.php?id=<?php echo $row['id_employee']; ?>">
                            Delete
                        </a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='11'>No employees found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php
$conn->close();
?>








