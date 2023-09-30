<?php
include 'conn.php';
include 'bootstrap.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO students (name, email, password)
    VALUES ('$fullname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo '
    <script>
    alert("successfully registered");
    window.location.href = "index.php";
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
