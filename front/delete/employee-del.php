<?php
// delete_employee.php

include "config.php";

if (isset($_GET['id'])) {
    // Delete employee record
    $id = $_GET['id'];

    $sql = "DELETE FROM employee_info WHERE employee_id=?";
    
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}
?>
