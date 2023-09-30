<?php
include 'conn.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Sanitize the 'id' parameter to prevent SQL injection
    $student_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create a SQL query to delete the student record
    $sql = "DELETE FROM students WHERE id = $student_id";

    if ($conn->query($sql) === TRUE) {
        // Record has been deleted successfully
        header("Location: view_student.php"); // Redirect back to the student list page
        exit();
    } else {
        // Handle any errors here
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
