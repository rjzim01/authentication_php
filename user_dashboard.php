<?php

require_once('db_connection.php');
require('header.php');

session_start();

if ((isset($_SESSION['user_id']))) {
    if (($_SESSION['role_id'] == 3)) {

        $userid = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];

    } else {
        echo "You are not authorized to view this page";
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
</head>

<body>
    <h2>Welcome,
        <?php echo $username; ?>
    </h2>

    <p><a href="logout.php">Logout</a></p>
</body>

</html>