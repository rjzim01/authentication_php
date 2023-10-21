<?php
// login_process.php

session_start();
require_once('db_connection.php'); // Connect to the database

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role_id'] = $row['role_id'];

        if ($_SESSION['role_id'] == 1) {
            header("Location: admin_dashboard.php"); // Redirect admin to admin dashboard
        } else if ($_SESSION['role_id'] == 2) {
            header("Location: manager_dashboard.php"); // Redirect manager to manager dashboard
        } else {
            header("Location: user_dashboard.php"); // Redirect user to user dashboard
        }
        exit();
    }
}

header("Location: login.php?error=1");
exit();

// mysqli_close($conn);
?>