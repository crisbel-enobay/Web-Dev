<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];

    // Update the database using SQL query
    $sql = "UPDATE students SET name='$fullname', email='$email' WHERE id=$student_id";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the list after successful update
        header("Location: view_student.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
