<?php
// Database connection (replace with your credentials)
require_once('db_connection.php');
require('header.php');

// Check if user ID is provided
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete user from the database
    $sql = "DELETE FROM users WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully.";
        header("Location: user.php");
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "Invalid user ID.";
}

$conn->close();
?>