<?php
// role_management.php

require_once('db_connection.php');
require('header.php');

session_start();

// if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) {
//     echo "Admin is logged in, display role management page";
// } else {
//     header("Location: login.php");
//     exit();

// }
// if ((isset($_SESSION['user_id'])) && ($_SESSION['role_id'] == 1)) {
if ((isset($_SESSION['user_id']))) {
    if (($_SESSION['role_id'] == 1)) {

        $userid = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];

    } else {
        //header("Location: login.php"); // Redirect to login page if not logged in
        echo "You are not authorized to view this page";
        exit();
    }
    // $user_id = $_SESSION['user_id'];
    // $username = $_SESSION['username'];
    // $role_id = $_SESSION['role_id'];
    // $email = $_SESSION['email'];
    // $password = $_SESSION['password'];
    // $created_at = $_SESSION['created_at'];
    // $updated_at = $_SESSION['updated_at'];
    // $deleted_at = $_SESSION['deleted_at'];
    // $status = $_SESSION['status'];
    // $role_name = $_SESSION['role_name'];
    // $role_description = $_SESSION['role_description'];
    // $role_created_at = $_SESSION['role_created_at'];
    // $role_updated_at = $_SESSION['role_updated_at'];
    // $role_deleted_at = $_SESSION['role_deleted_at'];
    // $role_status = $_SESSION['role_status'];
} else {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
//require('role_management.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- Add your dashboard content here -->
    <h1>This is your Admin dashboard.
        <?php echo $username; ?>
    </h1>

    <h3><a href="user.php">See your role management</a></h3>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>