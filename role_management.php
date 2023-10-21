<?php
// role_management.php

session_start();

if (isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 1)) {
    header("Location: admin_dashboard.php");
} else if (isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 2)) {
    header("Location: manager_dashboard.php");
} else if (isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 3)) {
    header("Location: user_dashboard.php");
} else {
    //header("Location: login.php");
    //exit();
}

// if (isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 1) && (isset($_SESSION['user_id']))) {
//     header("Location: admin_dashboard.php");
// } else if (isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 2) && (isset($_SESSION['user_id']))) {
//     header("Location: manager_dashboard.php");
// } else if (isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 3) && (isset($_SESSION['user_id']))) {
//     header("Location: user_dashboard.php");
// } else {
//     //header("Location: login.php");
//     //exit();
// }
?>