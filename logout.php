<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page (you can change this URL as needed)
header("Location: login.php");
exit();
?>