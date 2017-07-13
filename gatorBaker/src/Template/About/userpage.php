<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/13
 * Time: 9:01
 */
include_once 'testMysql.php';
if(!isset($_SESSION['user'])) {
    header("Location: logIn.php");
}

//
$query = "SELECT * FROM test_users WHERE ID=".$_SESSION['user']."";
$result = $mysqli->query($query);

$result = $mysqli->query($query);
if (!$result) {
    print('failure to quary' . $mysqli->error);
    $mysqli->close();
    exit();
}

// extract user infp
while ($row = $result->fetch_assoc()) {
    $username = $row['username'];
    $email = $row['email'];
}

// disconnect DB
$result->close();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

    <h1>Profile</h1>
    <ul>
        <li>User Name：<?php echo $username; ?></li>
        <li>e-mail：<?php echo $email; ?></li>
    </ul>
    <a href="logout.php?logout">log out</a>

</div>
</body>
</html>