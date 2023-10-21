<?php
// Database connection (replace with your credentials)
require('header.php');
require_once('db_connection.php');

// Check if user ID is provided
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Retrieve user information
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $email = $row['email'];
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "Invalid user ID.";
    exit();
}

// Handle form submission for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['new_username'];
    $new_email = $_POST['new_email'];

    // Update user information in the database
    $sql = "UPDATE users SET username='$new_username', email='$new_email' WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        echo "User information updated successfully.";
        // Optionally, you can redirect to a different page after successful update
        header("Location: user.php");
        exit();
    } else {
        echo "Error updating user information: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>

<body>
    <h2>Edit User</h2>
    <form method="post" action="">
        New Username: <input type="text" name="new_username" value="<?php echo $username; ?>"><br>
        New Email: <input type="email" name="new_email" value="<?php echo $email; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>