<?php
include('header.php');
require_once('db_connection.php');
// Query to get all elements from the table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>List of Users</title>
</head>

<body>
    <h2 class="ms-3 me-3 mt-3 mb-2">List of Users</h2>
    <!-- <p><a href="add_r.php">Add</a></p> -->
    <!-- <button type="button" class="btn btn-success"><a href="add_r.php">Add</a></button> -->
    <a class="btn btn-primary ms-3 me-3 mt-3 mb-2" href="add_r.php" role="button">Add New User</a>

    <table class="table table-success table-striped table-bordered m-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col" colspan=2>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$sl}</td><td>{$row['username']}</td><td>{$row['email']}</td><td><a  href='edit_user.php?id={$row['id']}'>Edit</a></td><td><a  href='delete_user.php?id={$row['id']}'>Delete</a></td></tr>";
                    $sl++;
                }
            } else {
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>


</body>

</html>