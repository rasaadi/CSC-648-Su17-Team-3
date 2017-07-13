<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/13
 * Time: 8:44
 */
ob_start();
session_start();
if( isset($_SESSION['user']) != "") {
    header("Location: userpage.php");
}
include_once 'testMysql.php';

$conn = new mysqli('localhost', 'todaka', '915999674');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login']))
{

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    // execute quary
    $query = "SELECT * FROM test_user WHERE email='$email'";
    $result = $mysqli->query($query);
    if (!$result) {
        print('fail to quary' . $mysqli->error);
        $mysqli->close();
        exit();
    }

    // extract username and password
    while ($row = $result->fetch_assoc()) {
        $db_hashed_pwd = $row['password'];
        $user_id = $row['ID'];
    }

    // disconnecting to DB
    $result_close();

    // make sure the pass
    if (password_verify($password, $db_hashed_pwd)) {
        $_SESSION['user'] = $ID;
        header("Location: home.php");
        exit;
    } else { ?>
        <div class="alert alert-danger" role="alert">UserName and password doen't match</div>
    <?php }
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In</title>
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

<form method="post">
  <h1>Log in </h1>
  <div class="form-group">
    <input type="username"  class="form-control" name="username" placeholder="User Name" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="password" required />
  </div>
  <button type="submit" class="btn btn-default" name="login">Log in</button>
  <a href="register.php">Register Here</a>
</form>

</div>
</body>
</html>