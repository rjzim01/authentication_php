<?php

require_once('db_connection.php');
require('header.php');

session_start();

if ((isset($_SESSION['user_id']))) {
    if (($_SESSION['role_id'] == 2)) {

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
    <title>Manager Dashboard</title>
</head>

<body>
    <h1>Welcome,
        <?php echo $username; ?>
    </h1>

    <p><a href="logout.php">Logout</a></p>
</body>

</html>