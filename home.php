<?php

require_once('db_connection.php');
require('header.php');

$username = "";

session_start();

if ((isset($_SESSION['user_id']))) {
    if (($_SESSION['role_id'] == 1)) {

        $userid = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        //echo $username . "You are not authorized to view this page";

    } elseif (($_SESSION['role_id'] == 2)) {

        $userid = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        //echo $username . "You are not authorized to view this page";

    } elseif (($_SESSION['role_id'] == 3)) {

        $userid = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];

    } else {
        //echo "You are not authorized to view this page";
        $username = "";
        exit();
    }
} else {
    //header("Location: login.php");
    //exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome
        <?php echo $username; ?> to Authentication System
    </h1>
</body>

</html>