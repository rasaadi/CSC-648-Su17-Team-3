<?php

session_start();
if( isset($_SESSION['user']) != "") {
header("Location: userpage.php");
}
// conncent to DB
include_once 'testMysql.php';

$conn = new mysqli('localhost', 'todaka', '915999674');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



//if register the user
if(isset($_POST['signup'])) {

    $username = $mysqli->real_escape_string($conn, $_POST['username']);
    $f_name = $mysqli->real_escape_string($conn, $_POST['f_name']);
    $l_name = $mysqli->real_escape_string($conn, $_POST['l_name']);
    $email = $mysqli->real_escape_string($conn, $_POST['email']);
    $password = $mysqli->real_escape_string($conn, $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT); // password should be hashed for security

    // Put into the infomation into DB
    $query = "INSERT INTO test_user(user_id,f_name,l_name,email,password) VALUES('$username','$f_name','$l_name','$email','$password')";

    if($mysqli->query($query)) {  ?>
        <div class="alert alert-success" role="alert">Complete the registration</div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">Failure to register</div>
        <?php
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

    <form method="post">
        <h1>Register</h1>

        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="User Name" required />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="f_name" placeholder="First Name" required />
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="l_name" placeholder="~Last Name" required />
        </div>

        <div class="form-group">
            <input type="email"  class="form-control" name="email" placeholder="mail address" required />
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>

        <button type="submit" class="btn btn-default" name="signup">Register the User</button>
        <a href="index.php">Log in here</a>
    </form>

</div>
</body>
</html>