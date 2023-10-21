<!-- login.php -->
<?php
// require_once 'login.php';
// session_start(); // Start the session
// require_once('db_connection.php');
// require_once('role_management.php');
require('role_management.php');
require('header.php');
//include('role_management.php');

// if (isset($_SESSION['user_id'])) {
//     header("Location: user_dashboard.php");
//     exit();
// }

?>

<!-- <form action="login_process.php" method="post">
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form> -->
<div class="m-5">
    <h1>Login</h1>
    <form action="login_process.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <!-- <div class="mb-3 form-check"> -->
        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
        <!-- <label  class="form-check-label" for="exampleCheck1">Not Regidtered?</label> -->
        <!-- </div> -->
        <p><a href="register.php">Not Regidtered?</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>