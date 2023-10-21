<?php
$servername = "localhost"; // Replace with your MySQL server address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "5_as_ostad"; // Replace with your MySQL database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Uncomment the line below for debugging purposes (optional)
// echo "Connected successfully";

// Set the character set to utf8 (optional, adjust if necessary)
mysqli_set_charset($conn, "utf8");
?>