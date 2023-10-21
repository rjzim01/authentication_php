<?php
// register_process.php

require_once('db_connection.php'); // Connect to the database

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

$sql = "INSERT INTO users (username, email, password, role_id) VALUES ('$username', '$email', '$password', 3)"; // Assuming '3' is the default user role
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>